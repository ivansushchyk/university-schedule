<?php

namespace App\Http\Controllers;

use App\Http\Requests\SelectGroupRequest;
use App\Http\Requests\SelectLecturerRequest;
use App\Teacher;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Lesson;
use App\Subject;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function showScheduleGroupSelection(SelectGroupRequest $request)
    {
    $lessons = Lesson::all()->where('group','=',$_GET['number'])->groupBy('day_number')->map(function ($item) {
        foreach ($item as $lesson){
            $newitem[$lesson->pair_number] = $lesson;
                    }
        return $newitem;
    });
    $lessons_array = [1 => $lessons];
    return view('index',compact('lessons_array'));
    }

    public function showScheduleLecturerSelection(SelectLecturerRequest $request)
    {
        $teacher = Teacher::where('name','=',$_GET['name'])->get();
        $lessons = Lesson::all()->where('teacher_id','=',$teacher[0]['id'])->groupBy('day_number')->map(function ($item) {
            foreach ($item as $lesson){
                $newitem[$lesson->pair_number] = $lesson;
            }
            return $newitem;
        });
        $lessons_array = [0 => $lessons];
        return view('index',compact('lessons_array'));

    }











    public function CategoryByLecturer()
    {
        return view('LecturerSchedule');
    }

    public function CategoryByGroup()
    {
        return view('GroupSchedule');
    }
}


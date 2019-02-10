<?php

namespace App\Http\Controllers;

use App\Http\Requests\SelectGroupRequest;
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


    public function show(SelectGroupRequest $request)
    {
    $lessons = Lesson::all()->where('group',$_POST['number'])->groupBy('day_number')->map(function ($item) {

        foreach ($item as $lesson){
            $newitem[$lesson->pair_number] = $lesson;
                    }
        return $newitem;
    });




    return view('index',compact('lessons'));




    }


    public function showLecturerSchedule()
    {
        return view('LecturerSchedule');
    }

    public function showGroupSchedule()
    {
        return view('GroupSchedule');
    }
}


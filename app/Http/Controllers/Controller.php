<?php

namespace App\Http\Controllers;

use App\Http\Requests\SelectGroupRequest;
use App\Http\Requests\SelectLecturerRequest;
use App\Teacher;
use http\Env\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Lesson;
use App\Subject;
use Illuminate\Support\Facades\Redirect;
use App\Group;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function GroupValidation()
    {
        $group_id = $_POST['group_name'];
        if (empty($group_id)){
            return Redirect::back()->withErrors(['Заповніть пусте поле']);
        }
        else
            $group = Group::where('name', $group_id)->get();
        if ($group->IsEmpty())
            return Redirect::back()->withErrors(['Такої групи немає']);
        else
            return Redirect::to(route('showByGroup', $group[0]->slug), 301);
    }

    public function LecturerValidation()
    {
        $teacher_name = $_POST['teacher_name'];
        if (empty($teacher_name))
            return Redirect::back()->withErrors(['Заповніть пусте поле']);
        else
            $teacher = Teacher::where('name', $teacher_name)->get();
        if ($teacher->IsEmpty())
            return Redirect::back()->withErrors(['Такого викладача немає']);
        else
            return Redirect::to(route('showByLecturer', $teacher[0]->slug), 301);

    }


    public function showGroupShedule($slug)
    {
        $group = Group::where('slug', $slug)->get();
        if ($group->isEmpty())
            abort(404);
        else
            $lessonsTopWeek = Lesson::all()->where('group_id', '=', $group[0]->id)->where('week','=','В')->groupBy('day_number')->map(function ($item) {
                foreach ($item as $lesson) {
                    $newitem[$lesson->pair_number] = $lesson;
                }
                return $newitem;
            });

        $lessonsBottomWeek = Lesson::all()->where('group_id', '=', $group[0]->id)->where('week','=','Н')->groupBy('day_number')->map(function ($item) {
            foreach ($item as $lesson) {
                $newitem[$lesson->pair_number] = $lesson;
            }
            return $newitem;
        });

        $lessons_array = [1 => $lessonsTopWeek , 2 => $lessonsBottomWeek];
        return view('index', ['lessons_array' => $lessons_array]);

    }

    public function showLecturerShedule($slug)
    {
        $teacher = Teacher::where('slug', $slug)->get();
        if ($teacher->isEmpty())
            abort(404);
        else
            $lessonsTopWeek = Lesson::all()->where('teacher_id', '=', $teacher[0]->id)->groupBy('day_number')->map(function ($item) {
                foreach ($item as $lesson) {
                    $newitem[$lesson->pair_number] = $lesson;
                }
                return $newitem;
            });

        $lessonsBottomWeek = Lesson::all()->where('teacher_id', '=', $teacher[0]->id)->groupBy('day_number')->map(function ($item) {
            foreach ($item as $lesson) {
                $newitem[$lesson->pair_number] = $lesson;
            }
            return $newitem;
        });


        $lessons_array = [0 => $lessonsTopWeek , 2 => $lessonsBottomWeek];
        return view('index', ['lessons_array' => $lessons_array]);
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


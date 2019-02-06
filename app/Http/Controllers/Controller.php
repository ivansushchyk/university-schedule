<?php

namespace App\Http\Controllers;

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


    public function show()
    {
    $lessons = Lesson::all()->groupBy('day_number')->map(function ($item) {
        foreach ($item as $lesson){
            $lesson = array($lesson->pair_number => $lesson );
                    }
        return $item;
    });

    return view('index',compact('lessons'));




    }
}


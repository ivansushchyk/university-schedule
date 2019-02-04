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
        function index($object)
        {
            $a = 1;
            if ($object['week'] == 'Н') {
                $a += 25;
            }
            switch ($object['day']) {

                case 'Вівторок':
                    $a += 1;
                    break;
                case 'Середа':
                    $a += 2;
                    break;
                case 'Четвер':
                    $a += 3;
                    break;
                case 'Пятниця':
                    $a += 4;
                    break;
            }
            $a = $a + ($object['pair_number']-1)*5;
            return $a;
        }

        $lessons = Lesson::all();
        $pairs = [];
        foreach ($lessons as $pair) {
            $pairs[index($pair)] = $pair;
        }
        return view('index',compact('pairs'));

    }
}

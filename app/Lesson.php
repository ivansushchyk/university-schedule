<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function teacher()
    {
        return $this->hasMany('App\Teacher','id');
    }

    public function classroom()
    {
        return $this->hasMany('App\Classroom','id');
    }

    public function subject()
    {
        return $this->hasMany('App\Subject','id');
    }




}

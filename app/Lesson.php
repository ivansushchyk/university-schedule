<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function teacher()
    {
        return $this->belongsTo('App\Teacher','id');
    }

    public function classroom()
    {
        return $this->belongsTo('App\Classroom','id');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject','id');
    }




}

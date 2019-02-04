<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    public function lesson()
    {
        return $this->belongsTo('App\Lesson');
    }
}

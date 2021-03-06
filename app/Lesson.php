<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function teacher()
    {
        return $this->belongsTo('App\Teacher','teacher_id');
    }

    public function classroom()
    {
        return $this->belongsTo('App\Classroom','room_id');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject','subj_id');
    }

    public function group()
    {
        return $this->belongsTo('App\Group','group_id');
    }




}
////node_modules
///public/hot
///public/storage
///storage/*.key
///vendor
//.env
//.phpunit.result.cache
//Homestead.json
//Homestead.yaml
//npm-debug.log
//yarn-error.log
//.idea
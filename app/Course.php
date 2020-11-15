<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
        'course_avatar',
    ];


    public function instructor()
    {
        return $this->belongsTo('App\Models\Instructor')->withDefault();
    }




}

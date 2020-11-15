<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courseimage extends Model
{
    public function course()
    {
        return $this->belongsTo('App\Models\Course')->withDefault();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    public function learning_times () {
        return $this->belongsToMany('App\LearningTime')->withTimestamps();
    }
}

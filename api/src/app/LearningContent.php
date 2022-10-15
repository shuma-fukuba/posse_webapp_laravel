<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningContent extends Model
{
    //
    public function learning_contents()
    {
        return $this->belongsToMany('App\LearningTime')->withTimestamps();
    }
}

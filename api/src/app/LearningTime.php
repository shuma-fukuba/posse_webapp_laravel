<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningTime extends Model
{
    //
    public function learning_contents()
    {
        return $this->belongsToMany('App\LearningContent')->withTimestamps();
    }

    public function languages() {
        return $this->belongsToMany('App\Language')->withTimestamps();
    }
}

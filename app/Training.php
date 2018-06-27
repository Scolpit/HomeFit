<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    public function ExerciseTraining()
    {
        return $this->hasMany(ExerciseTraining::class);
    }
}

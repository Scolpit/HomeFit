<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciseType extends Model
{
    public function Exercises()
    {
        return $this->hasMany(Exercise::class);
    }
}

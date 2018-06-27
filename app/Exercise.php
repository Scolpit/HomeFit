<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    public function difficulty()
    {
        return $this->belongsTo(Difficulty::class);
    }
    
    public function exercisetype()
    {
        return $this->belongsTo(ExerciseType::class);
    }
    
    public function ExerciseTraining()
    {
        return $this->hasMany(ExerciseTraining::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciseTraining extends Model
{
    protected $table = 'exercise_training';
    
    public function Exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
    
    public function Training()
    {
        return $this->belongsTo(Training::class);
    }
}

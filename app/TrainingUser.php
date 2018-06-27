<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingUser extends Model
{
    protected $table = 'training_user';
    
    public function training()
    {
        return $this->belongsTo(Training::class);
    }
    
    public function feedback()
    {
        return $this->belongsTo(Feedback::class);
    }
}

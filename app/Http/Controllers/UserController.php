<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrainingUser;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function traininguser()
    {
        $trainingusers = TrainingUser::with('training','feedback')
                                     ->where('user_id', Auth::id())
                                     ->orderBy('created_at','desc')
                                     ->get();
        
        return view('user.traininguser',compact('trainingusers'));
    }
}

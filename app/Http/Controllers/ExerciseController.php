<?php

namespace App\Http\Controllers;

use App\Exercise;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ExerciseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //$exercises = Exercise::all();        
        
        $exercises = Exercise::with('difficulty','exercisetype')
                             ->where('id','<>',1000)
                             ->orderBy('label', 'asc')
                             ->get();
        return view('exercise.exercise', compact('exercises'));
    }
    
    public function detail($excerciseid)
    {
        $exercise = Exercise::with('difficulty','exercisetype')->find($excerciseid);
        $relatedexercises = Exercise::with('difficulty','exercisetype')
                                    ->where('exercisetype_id',$exercise->exercisetype_id)
                                    ->where('id','!=',$exercise->id)
                                    ->take(4)
                                    ->get();
        
        $challenges = DB::table('challenges')->get();
                
        return view('exercise.exercisedetail', compact('exercise','relatedexercises','challenges'));
    }
}

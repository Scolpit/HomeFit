<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Training;
use App\ExerciseTraining;
use App\Exercise;
use App\TrainingUser;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $trainings = Training::all();
        //return $trainings;
        return view('training.training', compact('trainings'));
    }
    
    public function detail($trainingid)
    {
        $training = Training::find($trainingid);
        
        $exercisetrainings = DB::table('exercise_training')
                               ->join('exercises','exercise_training.exercise_id','exercises.id')
                               ->join('difficulties','difficulties.id','exercises.difficulty_id')
                               ->join('exercise_types','exercise_types.id','exercises.exercisetype_id')
                               ->select('cycle','exercise_id','exercise_types.label as exercisetype'
                                       ,'exercises.label as exercise','color','count','exercise_training.isreps','additionalinfo')
                               ->where('training_id',$trainingid)
                               ->orderBy('order', 'asc')
                               ->get();
        
        $cyclecount = ExerciseTraining::where('training_id',$trainingid)->max('cycle');
        
        return view('training.trainingdetail', compact('training','exercisetrainings','cyclecount'));
    }
    
    public function start(Request $request, $trainingid)
    {
        //For complete
        session(['W' => ($request->checkWarming=='on')?"TRUE":"FALSE" ]);
        session(['S' => ($request->checkStretching=='on')?"TRUE":"FALSE" ]);
        
        session(['Warming' => ($request->checkWarming=='on')?"TRUE":"FALSE" ]);
        session(['Training' => "TRUE"]) ;
        session(['Stretching' => ($request->checkStretching=='on')?"TRUE":"FALSE" ]);
        session(['StartTime' => time()]);
        
        return redirect('training/'.$trainingid.'/'.'1');
    }
    
    public function trainexercise($trainingid, $order)
    {
        do {
            $repeat = false;
            //Select the correct step (warming, exercise or stretching)
            $tid = (session('Stretching')=="TRUE")?2:0;
            $tid = (session('Training')=="TRUE")?$trainingid:$tid;
            $tid = (session('Warming')=="TRUE")?1:$tid;

            //See if exceeded the number of exercises per training
            $max = ExerciseTraining::where('training_id',$tid)->max('order');

            if($order>$max)
            {
                if(session('Warming')=="TRUE")
                {
                    //When Warming ends
                    session(['Warming' => "FALSE" ]);
                    session(['StartTime' => time()]);
                    $order=1;
                    $repeat=true;
                } elseif (session('Training')=="TRUE") {
                    //When Training ends
                    session(['Training' => "FALSE" ]);
                    session(['EndTime' => time()]);
                    $order=1;
                    $repeat=true;
                } elseif (session('Stretching')=="TRUE") {
                    //When Stretching ends
                    session(['Stretching' => "FALSE" ]);
                    $tid = 0;
                }
            }
        }
        while (($order>$max && $tid != 0) || $repeat);
            
        //Training ends here
        if($tid==0)
        {
            $time = session('EndTime')-session('StartTime');
            $seconds = $time%60;
            $minutes = (($time-$seconds)/60)%60;
            $hours = ($time-($minutes*60)-$seconds)/3600;
            
            $seconds = (strlen($seconds)==1)?'0'.$seconds:$seconds;
            $minutes = (strlen($minutes)==1)?'0'.$minutes:$minutes;
            
            $timestring = $hours.":".$minutes.":".$seconds;
            
            $trainingname = $training = Training::find($trainingid)->label;
            $feedbacks = Feedback::all();
            return view('training.complete',compact('feedbacks','trainingid','trainingname','timestring'));
        }
        
        //Get exercises per training
        $exercise = DB::table('exercises')
                      ->join('exercise_training','exercise_training.exercise_id','exercises.id')
                      ->where('exercise_training.training_id',$tid)
                      ->where('exercise_training.order',$order)
                      ->first();
        
        //Get Training name
        $trainingname = $training = Training::find($tid)->label;
        
        return view('training.trainingexercise', compact('trainingid','order','exercise','trainingname'));
    }
    
    public function complete(Request $request, $trainingid)
    {
        $warming = (session('W')=="TRUE")?true:false;
        $stretching = (session('S')=="TRUE")?true:false;
        
        $traininguser = new TrainingUser;
        
        $traininguser->user_id = Auth::id();
        $traininguser->duration = $request->duration;
        $traininguser->warming = $warming;
        $traininguser->stretching = $stretching;
        $traininguser->feedback_id = $request->feedback;
        $traininguser->training_id = $trainingid;
        
        $traininguser->save();
        
        return redirect()->intended('traininguser');
    }
}

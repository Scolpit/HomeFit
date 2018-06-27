<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class MyLoginController extends Controller
{
    public function authenticate(Request $request)
    {
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            $user = Auth::user();
            session(['Username' => $user->name]) ;
            return redirect()->intended('exercise');
        }
        else
        {
            return redirect()->intended('/');
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/');
    }
}
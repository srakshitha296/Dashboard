<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function profile(){
        return view('profile');
    }

    public function activities(){
        return view('activities');
    }

    public function activityTypes(){
        return view('activityTypes');
    }

    public function workshops(){
        return view('workshops');
    }
}

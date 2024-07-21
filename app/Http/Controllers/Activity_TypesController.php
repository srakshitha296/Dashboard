<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Activity_TypesController extends Controller
{
    public function index()
    {
        return view('activity_types');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopsController extends Controller
{
    public function index()
    {
        return view('workshops');
    }
}

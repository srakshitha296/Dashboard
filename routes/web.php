<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
// use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\Activity_TypesController;
// use App\Http\Controllers\ActivityController;
// use App\Http\Controllers\WorkshopsController;


Route::get('/', function () {
    return view('welcome');
});


// Route::get('/dashboard', function () {
//     return view('newDashboard');
// });

 Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
// Route::get('/profile', [MainController::class, 'profile'])->name('profile');
// Route::get('/activities', [MainController::class, 'activities'])->name('activities');
// Route::get('/activityTypes', [MainController::class, 'activityTypes'])->name('activity_types');
// Route::get('/workshops', [MainController::class, 'workshops'])->name('workshops');



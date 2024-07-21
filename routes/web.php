<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Activity_TypesController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\WorkshopsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/activities', [ActivityController::class, 'index'])->name('activities');
Route::get('/activity_types', [Activity_TypesController::class, 'index'])->name('activity_types');
Route::get('/workshops', [WorkshopsController::class, 'index'])->name('workshops');



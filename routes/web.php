<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');

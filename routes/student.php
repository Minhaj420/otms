<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentAuthController;
use App\Http\Controllers\Student\StudentController;

Route::middleware(['student'])->group(function (){

    Route::get('/student-dashboard', [StudentAuthController::class, 'dashboard'])->name('student.dashboard');
    Route::get('/student-all-course', [StudentController::class, 'allCourse'])->name('student.all-course');
    Route::get('/student-logout', [StudentAuthController::class, 'logout'])->name('student.logout');
});

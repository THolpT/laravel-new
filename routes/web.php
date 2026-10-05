<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', [MainController::class, 'index'])->name('sosat');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', [MainController::class, 'index'])->name('sosat');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');
Route::get('/students/edit/{student}', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/edit/{student}', [StudentController::class, 'update'])->name('students.update');
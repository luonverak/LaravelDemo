<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StudentController::class, 'getStudent']);
Route::get('/add-student', [StudentController::class, 'addPage']);
Route::post('/add-student', [StudentController::class, 'addStudent']);
Route::post('/delete-student', [StudentController::class, 'deleteStudent']);
Route::get('/update-student/{id}',[StudentController::class,'updatePage']);
Route::post('/update-submit',[StudentController::class,'updateData']);
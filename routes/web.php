<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StudentController::class, 'homePage']);
Route::get('/add-student', [StudentController::class, 'addPage']);

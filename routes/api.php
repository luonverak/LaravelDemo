<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/student', [ApiController::class, 'getStudent']);
Route::post('/add-student', [ApiController::class, 'addStudent']);
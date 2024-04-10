<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/student', [ApiController::class, 'getStudent']);
Route::post('/add', [ApiController::class, 'addStudent']);
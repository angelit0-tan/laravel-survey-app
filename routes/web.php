<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\PasswordProtect;

Route::get('/', function () {
    return view('test');
})->middleware(PasswordProtect::class);

Route::resource('/login', \App\Http\Controllers\LoginController::class);
Route::get('/questions',  [\App\Http\Controllers\QuestionController::class, 'index']);
Route::post('/answers',  [\App\Http\Controllers\AnswerController::class, 'store']);
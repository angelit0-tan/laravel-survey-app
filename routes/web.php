<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});
Route::get('/questions',  [\App\Http\Controllers\QuestionController::class, 'index']);
Route::post('/answers',  [\App\Http\Controllers\AnswerController::class, 'store']);
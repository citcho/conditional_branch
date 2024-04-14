<?php

use App\Http\Controllers\Step1Controller;
use App\Http\Controllers\Step2Controller;
use App\Http\Controllers\Step3Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/step1', Step1Controller::class);
Route::get('/step2', Step2Controller::class);
Route::get('/step3', Step3Controller::class);

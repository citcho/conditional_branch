<?php

use App\Http\Controllers\Step1Controller;
use App\Http\Controllers\Step2Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/step1', Step1Controller::class);
Route::get('/step2', Step2Controller::class);

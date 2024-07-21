<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/layout',[Controller::class,'index']);
Route::get('/layout', [AbsenController::class, 'index']);

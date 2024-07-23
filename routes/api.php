<?php

use App\Http\Controllers\api\JadwalController;
use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/jadwals',[JadwalController::class,'index']);
Route::post('/jadwal',[JadwalController::class,'store']);

Route::get('/users',[UserController::class,'index']);

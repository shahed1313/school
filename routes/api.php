<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\NurseryController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

Route::post('addSchool',[AdminController::class,'addSchool']);
Route::post('editSchool',[AdminController::class,'editSchool']);
Route::get('getSchool',[AdminController::class,'getSchool']);
Route::delete('deleteSchool',[AdminController::class,'deleteSchool']);

Route::post('addSchool',[NurseryController::class,'addNursery']);
Route::post('editNursery',[NurseryController::class,'editNursery']);
Route::get('getNursery',[NurseryController::class,'getNursery']);
Route::delete('deleteNursery',[NurseryController::class,'deleteNursery']);

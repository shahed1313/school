<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\NurseryController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SchoolSClassController;
use App\Http\Controllers\SClassController;
use App\Http\Controllers\StudentSClassController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});


Route::group(['middleware' => 'Admin'], function () {
    Route::post('addSchool',[AdminController::class,'addSchool']);
    Route::post('editSchool',[AdminController::class,'editSchool']);
    Route::get('getSchool',[AdminController::class,'getSchool']);
    Route::delete('deleteSchool',[AdminController::class,'deleteSchool']);

    Route::post('addNursery',[NurseryController::class,'addNursery']);
    Route::post('editNursery',[NurseryController::class,'editNursery']);
    Route::get('getNursery',[NurseryController::class,'getNursery']);
    Route::delete('deleteNursery',[NurseryController::class,'deleteNursery']);

    Route::delete('admin',[AdminController::class,'admin']);
});


Route::group(['middleware' => 'director'], function () {
    Route::post('addClass', [DirectorController::class, 'addClass']);
    Route::post('editClass', [DirectorController::class, 'editClass']);
    Route::delete('deleteClass', [DirectorController::class, 'deleteClass']);
    Route::get('getclass',[SClassController::class,'getclass']);
});



Route::group(['middleware' => 'teacher'], function () {
    Route::post('editStudent',[DirectorController::class,'editStudent']);
    Route::delete('deleteStudent',[DirectorController::class,'deleteStudent']);
    Route::post('addStudent',[StudentSClassController::class,'addStudent']);
    Route::get('getStudent',[SClassController::class,'getStudent']);
    Route::get('getStudents',[SClassController::class,'getStudents']);
});




<?php

use Illuminate\Support\Facades\Route;
//use app\http\Controllers\PageControler;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;

Route::get('/',[PageController::class,'index'])->name('home');
Route::get('/course',[PageController::class,'course'])->name('course');
Route::get('/feedback',[PageController::class,'feedback'])->name('feedback');
Route::get('/login',[PageController::class,'login']);
Route::get('/price',[PageController::class,'price'])->name('price');
Route::get('/profile',[PageController::class,'profilepage'])->name('profilepage');
Route::get('/signup',[PageController::class,'signup'])->name('signup');
Route::get('/team',[PageController::class,'team'])->name('team');
Route::get('/video',[PageController::class,'video'])->name('video');
Route::get('/whyspace',[PageController::class,'whySpace'])->name('whySpace');

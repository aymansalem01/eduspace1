<?php

use Illuminate\Support\Facades\Route;
//use app\http\Controllers\PageControler;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;

Route::get('/',[PageController::class,'index'])->name('home');
Route::get('/course',[PageController::class,'course'])->name('course');
Route::get('/feedback',[PageController::class,'feedback'])->name('feedback');
Route::get('/login',[PageController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'login'])->name('logining');
Route::get('/price',[PageController::class,'price'])->name('price');
Route::get('/profile',[PageController::class,'profilepage'])->name('profilepage');
Route::get('/signup',[PageController::class,'signup'])->name('signup');
Route::post('/store',[UserController::class,'store'])->name('storeUser');
Route::get('/team',[PageController::class,'team'])->name('team');
Route::get('/video',[PageController::class,'video'])->name('video');
Route::get('/whyspace',[PageController::class,'whySpace'])->name('whySpace');


Route::get('/ar',[PageController::class,'indexAr'])->name('homeAr');
Route::get('/ar/whyspace',[PageController::class,'whySpaceAr'])->name('whySpaceAr');
Route::get('/ar/team',[PageController::class,'teamAr'])->name('teamAr');
Route::get('ar/course',[PageController::class,'courseAr'])->name('courseAr');
Route::get('/ar/feedback',[PageController::class,'feedbackAr'])->name('feedbackAr');

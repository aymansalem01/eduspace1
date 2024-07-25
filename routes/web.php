<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PageController;

Route::get('/' , function () {
    return view('index');
});
Route::get('/subject',function (){
    return view('subject');
});
Route::get('/login',function() {
    return view('login');
});
Route::get('/signin',function() {
    return view('signin');
});
Route::get('/aboutus',function()
{
    return view('aboutus');});

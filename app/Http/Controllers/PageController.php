<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }

    public function subject(){
            return view('subject');
        }
    public function login() {
            return view('login');
        }
    public function signin() {
        return view('signin');
    }
    public function aboutus() {
        return view('aboutus');
    }

}

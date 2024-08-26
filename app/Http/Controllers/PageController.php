<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function indexAr(){
        return view('ar.home');
    }
  public function course(){
    return view('course');
  }

  public function courseAr(){
    return view('ar.course');
  }
  public function feedback(){
    return view('feedback');
  }
  public function feedbackAr(){
    return view('ar.feedback');
  }
  public function login(){
    return view('login');
  }
  public function price(){
    return view('price');
  }
  public function profilepage(){
    return view('profilepage');
  }
  public function signup(){
    return view('signup');
  }
  public function team(){
    return view('team');
  }
  public function teamAr(){
    return view('ar.team');
  }
  public function video(){
    return view('video');
  }
  public function whySpace(){
    return view('whyspace');
  }
  public function whySpaceAr(){
    return view('ar.whyspace');
  }
}

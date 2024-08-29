<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //   return view('/users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $user =new user();
       $user->name= $request->input('Username');
       $user->email= $request->input('email');
       if($request->input('password')==$request->input('confirm_password')){
       $user->password= Hash::make($request->input('password'));
       }
       else{
        return back()->withErrors([
            'password' => 'password not match.',
        ]);

       }
    //    $user->password= $request->input('password');
       $user->save();
       return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function login(Request $request){
        
        $request->validate([
            'email'=>'required|string|exists:users,email|email',
            'password'=>'required|min:8',
        ]);
        $user=User::where('email',$request->email)->first();
        if(Hash::check($request->password, $user->password)){
            $user->up
        Auth::login($user);
        
        return redirect()->route('home');
    }  return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
        
}
    public function logout(){
        Auth::user()->tokens->delete();
        return redirect()->route('login');
    }
}

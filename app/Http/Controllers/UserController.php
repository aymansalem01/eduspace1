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
        $request->validate([
            'Username' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password'  => 'required|min:8',
        ]);

       $user =new user();
       $user->name= $request->input('Username');
       $user->email= $request->input('email');
       if($request->input('password')==$request->input('confirm_password')){
       $user->password= Hash::make($request->input('password'));
       }
       else{
        return back()->withErrors([
            'confirm_password' => 'password not match.',
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
            Auth::user()->createToken($user->name)->accessToken;
        Auth::login($user);
        
        return redirect()->route('home');
    } 
     return back()->withErrors([
        'password' => "The email or password is incorrect",
    ]);
        
}
public function logout(Request $request)
{
    Auth::user()->tokens->each(function($token, $key) {
        $token->delete();
    });
    return redirect()->route('login');
}
}

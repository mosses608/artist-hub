<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
//use App\Models\Listing;
use Illuminate\Validation\Rule;
class UsersController extends Controller
{
    //

    
    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $FormFields=$request->validate([
            'email'=>['required', Rule::unique('users','email')],
            'name'=>'required',
            'password'=>'required|min:6'
        ]);

        $user=User::create($FormFields);

        auth()->login($user);
        
        return redirect('/')->with('message','User and logged created successfully');
    }

    public function login(){
        return view('users.login');
    }

    public function authenticate(Request $request){
        $LoginCredentials=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if(auth()->attempt($LoginCredentials)){

            $request->session()->regenerateToken();

            return redirect('/')->with('message','Login successfully');
        }else{
            return redirect()->back()->with('message','Incorrect email or password!');
        }
    }


    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','Logout successfully');
    }
}

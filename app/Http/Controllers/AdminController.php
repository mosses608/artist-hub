<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Listing;
class AdminController extends Controller
{
    //

    public function signIn(){
        return view('listings.admin');
    }

    public function welcome(){
        return view('listings.administration',[
            'listings'=>Listing::latest()->filter(request(['search']))->paginate(4)
        ]);
    }

    public function authentication(Request $request){
        $formFields=$request->validate([
            'name'=>'required',
            'password'=>'required|min:6',
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerateToken();

            return redirect('/listings/administration')->with('message','Admin logged in successfully');

        } else{

            return redirect()->back()->with('error','Incorrect username or password!');

        }  
    }
}

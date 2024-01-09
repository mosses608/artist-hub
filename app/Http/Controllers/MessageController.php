<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Listing;
class MessageController extends Controller
{
    //

    public function news(Request $request){
        $formFields=$request->validate([
            'name'=>'required',
            'message'=>'required'
        ]);
        Message::create($formFields);

        return redirect()->back()->with('message','News posted successfully, refresh ');
    }
    public function postNews(){
        return view('listings.news',[
            'listings'=>Listing::all()
        ]);
    }

    public function updates(){
        return view('listings.updates',[
            'messages'=>Message::latest()->filter(request(['search']))->paginate(10)
        ]);
    }
}

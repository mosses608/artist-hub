<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestResponse;
use App\Models\Listing;
class RequestResponseController extends Controller
{
    //

    public function reply(){
        return view('listings.reply',[
            'listings'=>Listing::all(),
        ]);
    }

    public function responses(Request $request){
        $responsesFields=$request->validate([
            'action'=>'required',
            'contact'=>'required',
            'email'=>'nullable',
            'name_accept'=>'nullable',
            'request_accepted'=>'nullable',
            'name_reject'=>'nullable',
            'request_rejected'=>'nullable',
            'reason'=>'nullable'
        ]);

        RequestResponse::create($responsesFields);

        return redirect()->back()->with('message','You replied successfully');
    }
}

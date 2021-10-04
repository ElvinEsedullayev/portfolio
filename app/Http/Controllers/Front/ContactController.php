<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Social;
use App\Models\Contact;
use Validator;
class ContactController extends Controller
{
    public function index()
    {
        $user = User::orderByDesc('created_at')->first();
        $socials = Social::get();
        return view('front\contact',compact('user','socials'));
    }
    
    public function send_message(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|min:3',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->only(['name','email','subject','message']);
        Contact::create($data);
        return redirect()->route('contact')->with('success','Tebrik edirik! Mesajiniz ugurlu sekilde gonderildi');
    }
}

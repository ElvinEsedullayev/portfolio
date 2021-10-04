<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;//auth istifade etmek ucun kitabxanani elave edirik
use Illuminate\Support\Facades\Hash;//kod ucun yazilir
class YonetimController extends Controller
{
    public function index()
    {
        return view('back.auth.login');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $pas = $request->password;
        $password = md5($pas);
        if(Auth::attempt(['email' => $request->post('email'), 'password' => $request->post('password')])){
            return redirect()->route('yonetim.home')->with('success','Admin panele giris etdiz');
        }else{
            return redirect()->back()->withErrors('Login ve ya parol sehvdir');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('yonetim.login');
    }
}

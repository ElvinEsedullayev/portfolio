<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Social;
class AboutController extends Controller
{
    public function index()
    {
        $user = User::orderByDesc('created_at')->first();
        $socials = Social::get();
        return view('front\about',compact('user','socials'));
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Social;
use App\Models\Portfolio;
class PortfolioController extends Controller
{
        public function index()
    {
        $user = User::orderByDesc('created_at')->first();
        $socials = Social::get();
        $portfolies = Portfolio::orderByDesc('id')->paginate(6);
        return view('front\portfolio',compact('user','socials','portfolies'));
    }
}

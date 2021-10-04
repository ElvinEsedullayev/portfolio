<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Social;
use App\Models\User;
class AnasayfaController extends Controller
{
    public function index()
    {
        $blog = Blog::get();
        $portfolio = Portfolio::get();
        $social = Social::get();
        $user = User::get();
        return view('back.home',compact('blog','portfolio','social','user'));
    }
}

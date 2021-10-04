<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Social;
use App\Models\Blog;
class BlogController extends Controller
{
        public function index()
    {
        $user = User::orderByDesc('created_at')->first();
        $socials = Social::get();
        $blogs = Blog::orderByDesc('id')->paginate(3);
        return view('front\blog',compact('user','socials','blogs'));
    }

    public function detail($id)
    {
        $blog = Blog::find($id);
        return view('front\blogdetail',compact('blog'));
    }
}

<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Blog;
class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::get();
        return view('back.blogs.blog',compact('blogs'));
    }

    public function create()
    {
        return view('back.blogs.create');
    }

    public function created(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'author'=>'required',
            'blog_name'=>'required',
            'about'=>'required',
            'date'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $blog = new Blog;
        if($request->hasFile('image')){
            Validator::make($request->post(),[
                'image'=>'image|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
            $blogImage = $request->file('image');
            $blogImage = $request->image;
            $dosyaAdi = time(). '.' . $blogImage->extension();
            if($blogImage->isValid()){
                $blogImage->move('uploads/blogs',$dosyaAdi);
                $blog = Blog::updateOrCreate([
                    'author'=>$request->post('author'),
                    'blog_name'=>$request->post('blog_name'),
                    'about'=>$request->post('about'),
                    'date'=>$request->post('date'),
                    'image'=>$dosyaAdi
                ]);
            }
        }
        return redirect()->route('yonetim.blog')->with('success','Blog eklendi');
    }

    public function update($id)
    {
        $blog = Blog::find($id);
        return view('back.blogs.update',compact('blog'));
    }

    public function updated($id)
    {
        $data = request()->only(['blog_name','author','about','date']);
        $blog = Blog::where('id',$id)->firstOrFail();
        $blog->update($data);
        if(request()->hasFile('image')){
            $this->validate(request(),[
                'image'=>'image|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
            $blogImage = request()->file('image');
            $blogImage = request()->image;
            $dosyaAdi = time() . '.' . $blogImage->extension();
            if($blogImage->isValid()){
                $blogImage->move('uploads/blogs',$dosyaAdi);
                $blog->update([
                    'image'=>$dosyaAdi,
                    'author'=>request()->post('author'),
                    'blog_name'=>request()->post('blog_name'),
                    'about'=>request()->post('about'),
                    'date'=>request()->post('date')
                ]);
            }
        }
        return redirect()->back()->with('success','Blog guncellendi');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->back()->with('success','Blog silindi');
    }
}

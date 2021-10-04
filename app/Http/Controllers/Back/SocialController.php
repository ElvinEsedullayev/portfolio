<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;
use Validator;
class SocialController extends Controller
{
    public function index()
    {
        $socials = Social::get();
        return view('back.socials.social',compact('socials'));
    }

    public function create()
    {
        return view('back.socials.create');
    }

    public function created(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'link'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $social = new Social;
        $social->name = $request->name;
        $social->link = $request->link;
        $social->save();

        return redirect()->route('yonetim.social')->with('success','Social eklendi');
    }

    public function update($id)
    {
        $social = Social::find($id);
        return view('back.socials.update',compact('social'));
    }

    public function updated(Request $request,$id)
    {
        $social = Social::findOrFail($id);
        $social->name = $request->name;
        $social->link = $request->link;

        $social->save();
        return redirect()->back()->with('success','Social yenilendi');
    }

    public function delete($id)
    {
        $social = Social::find($id);
        $social->delete();
        return redirect()->route('yonetim.social')->with('success','Social silindi');
    }
}

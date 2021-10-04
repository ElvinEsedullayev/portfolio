<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Portfolio;
class PortController extends Controller
{
    public function index()
    {
        $portfolies = Portfolio::get();
        return view('back.portfolio.portfolio',compact('portfolies'));
    }

    public function create()
    {
        return view('back.portfolio.create');
    }

    public function created(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'kind'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $portfolio = new Portfolio;
        if($request->hasFile('image')){
            Validator::make($request->post(),[
                'image'=>'image|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
            $portImage = $request->file('image');
            $portImage = $request->image;
            $dosyaAdi = time(). '.' . $portImage->extension();
            if($portImage->isValid()){
                $portImage->move('uploads/portfolio',$dosyaAdi);
                $portfolio = Portfolio::updateOrCreate([
                    'image'=>$dosyaAdi,
                    'name'=>$request->post('name'),
                    'kind'=>$request->post('kind')
                ]);
            }
        }
        return redirect()->route('yonetim.portfolio')->with('success','Portfolio eklendi');
    }

    public function update($id)
    {
        $portfolio = Portfolio::find($id);
        return view('back.portfolio.update',compact('portfolio'));
    }

    public function updated($id)
    {
        $data = request()->only(['name','kind']);
        $portfolio = Portfolio::where('id',$id)->firstOrFail();
        $portfolio->update($data);
        if(request()->hasFile('image')){
            $this->validate(request(),[
                'image'=>'image|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
            $portImage = request()->file('image');
            $portImage = request()->image;
            $dosyaAdi = time() . '.' . $portImage->extension();
            if($portImage->isValid()){
                $portImage->move('uploads/portfolio',$dosyaAdi);
                $portfolio->update([
                    'image'=>$dosyaAdi,
                    'name'=>request()->post('name'),
                    'kind'=>request()->post('kind')
                ]);
            }
        }
        return redirect()->back()->with('success','Portfolio guncellendi');
    }

    public function delete($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect()->back()->with('success','Portfolio silindi');
    }
}

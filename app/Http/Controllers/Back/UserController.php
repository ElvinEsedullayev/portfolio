<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Hash;//kod ucun yazilir
class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('back.user.user',compact('users'));
    }

    public function create()
    {
        return view('back.user.create');
    }

    public function created(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|min:5',
            'surname'=>'required|min:5',
            'email'=>'required|email|unique:users',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = new User;
        
        if($request->hasFile('image')){
                Validator::make($request->post(),[
                    'image'=>'image|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
            $userimage = $request->file('image');
            $userimage = $request->image;
            $dosyadi=$user->id. '-'. time(). '.'. $userimage->extension();
            if($userimage->isValid()){
                $userimage->move('uploads/users',$dosyadi);
                $user = User::updateOrCreate([
                    'image'=>$dosyadi,
                    'name'=>$request->post('name'),
                    'surname'=>$request->post('surname'),
                    'specialty'=>$request->post('specialty'),
                    'adres'=>$request->post('adres'),
                    'country_city'=>$request->post('country_city'),
                    'mobile'=>$request->post('mobile'),
                    'about'=>$request->post('about'),
                    'email'=>$request->post('email'),
                    'password'=>Hash::make($request->post('password')),
                ]);
            }
        }
        return redirect()->route('yonetim.user')->with('success','User eklendi');
    }

    public function update($id)
    {
        $user = User::find($id);
        return view('back.user.update',compact('user'));
    }
    public function updated($id)
    {
        $data = request()->only(['name','surname','adres','mobile','country_city','specialty','email','about']);
     
        $user = User::where('id',$id)->firstOrFail();
        $user->update($data);

        if(request()->hasFile('image')){
            $userimage = request()->file('image');
            $userimage = request()->image;
            $dosyadi = time() . '.' .$userimage->extension();
            if($userimage->isValid()){
                $userimage->move('uploads/users',$dosyadi);
                $user->update([
                    'image'=>$dosyadi,
                    'name'=>request()->post('name'),
                    'surname'=>request()->post('surname'),
                    'specialty'=>request()->post('specialty'),
                    'adres'=>request()->post('adres'),
                    'country_city'=>request()->post('country_city'),
                    'mobile'=>request()->post('mobile'),
                    'about'=>request()->post('about'),
                    'email'=>request()->post('email'),
                    'password'=>Hash::make(request()->post('password')),
                ]);
            }
        }
        return redirect()->back()->with('success','User guncellendi');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('User silindi');
    }
}

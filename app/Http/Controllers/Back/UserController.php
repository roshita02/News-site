<?php

namespace App\Http\Controllers\Back;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends BackController
{
    public function user()
    {
        return view($this->page.'showUser');
    }
    public function addUser(Request $request)
    {
        if($request->isMethod('get'))
        {
            return view($this->page.'addUser');
        }
        if($request->isMethod('post'))
        {
            $this->validate($request,[
            'name'=>'required|min:3',
            'email'=>'required|email|unique:users,email',
                'password'=>'required|min:5|confirmed',
                'image'=>'required|mimes:jpeg,jpg,gif,png'
        ]);
            $data['name']=$request['name'];
            $data['email']=$request['email'];
            $data['password']=bcrypt($request->password);
            if($request->hasFile('image'))
            {
                $image=$request->file('image');
                $ext=$image->getClientOriginalExtension();
                $imageName=str_random().'.'.$ext;
                $uploadPath=public_path('UserImage/');
                if($image->move($uploadPath.$imageName)){
                    $data['image']=$imageName;
                }
            }
            if(User::create($data))
            {
                return redirect()->route('users')->with('success','User was inserted successfully');
            }
            return redirect()->back();
        }
    }
}

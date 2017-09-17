<?php

namespace App\Http\Controllers\Back;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends BackController
{
    public function news()
    {
        return view($this->page.'showNews');
    }
    public function addnews(Request $request)
    {
        if($request->isMethod('get'))
        {
            return view($this->page.'addNews');
        }
        if($request->isMethod('post'))
        {
            $this->validate($request,[
                'title'=>'required|min:4',
                'category'=>'required',
                'description'=>'required|min:10',
                'image'=>'required|mimes:jpeg,jpg,gif,png'
            ]);
            $data['title']=$request['title'];
            $data['category']=$request['category'];
            $data['description']=$request['description'];
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
            if(News::create($data))
            {
                return redirect()->route('news')->with('success','News was inserted successfully');
            }
            return redirect()->back();
        }
    }
}

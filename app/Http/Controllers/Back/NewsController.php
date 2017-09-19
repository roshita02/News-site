<?php

namespace App\Http\Controllers\Back;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NewsController extends BackController
{
    public function news()
    {
        $this->data('newsData',News::paginate(3));
        return view($this->page.'showNews',$this->data);
    }
    public function addNews(Request $request)
    {
        if($request->isMethod('get'))
        {
            return view($this->page.'addNews',$this->data);
        }
        if($request->isMethod('post'))
        {
            $this->validate($request,[
                'title'=>'required|min:4',
                'descriptiom'=>'required|min:10',
                'image'=>'required|mimes:jpeg,jpg,gif,png'
            ],[
                    'title.required' => 'Title field is required',
                    'category.required' => 'Category field is required',
                    'descriptiom.required' => 'Description field is required',
                ]
            );
            $data['title']=$request['title'];
            $data['category']=$request['category'];
            $data['descriptiom']=$request['descriptiom'];
            if($request->hasFile('image'))
            {
                $image=$request->file('image');
                $ext=$image->getClientOriginalExtension();
                $imageName=str_random().'.'.$ext;
                $uploadPath=public_path('NewsImage/');
                if($image->move($uploadPath,$imageName)){
                    $data['image']=$imageName;
                }
            }
            if(News::create($data))
            {
                return redirect()->route('new')->with('success', 'News was added successfully');
            }
            else{
                return redirect()->back();

            }

        }
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $newsData = News::find($id);
        $newsImage = $newsData->image;
        if ($newsImage) {
            $imagePath = public_path('NewsImage/' . $newsImage);
            unlink($imagePath);
        }
        if ($newsData->delete()) {
            return redirect()->route('new')->with('success', 'News was deleted');
        }

    }


}

<?php

namespace App\Http\Controllers\Back;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends BackController
{

    public function user()
    {
        $this->data('userData', User::paginate(5));
        return view($this->page . 'showUser', $this->data);
    }

    public function addUser(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->page . 'addUser', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|min:3',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:5|confirmed',
                'image' => 'required|mimes:jpeg,jpg,gif,png'
            ]);
            $data['name'] = $request['name'];
            $data['email'] = $request['email'];
            $data['password'] = bcrypt($request->password);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $uploadPath = public_path('UserImage/');
                if ($image->move($uploadPath, $imageName)) {
                    $data['image'] = $imageName;
                }
            }
            if (User::create($data)) {
                return redirect()->route('users')->with('success', 'User was inserted successfully');
            }
            return redirect()->back();
        }
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $userData = User::find($id);
        $userImage = $userData->image;
        if ($userImage) {
            $imagePath = public_path('UserImage/' . $userImage);
            unlink($imagePath);
        }
        if ($userData->delete()) {
            return redirect()->route('users')->with('success', 'User was deleted');
        }

    }

    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->page . 'Login.login');
        }
        if ($request->isMethod('post')) {
            $email = $request->email;
            $password = $request->password;
            $rem = isset($request->remember) ? true : false;
            if (Auth::attempt(['email' => $email, 'password' => $password], $rem)) {
                return redirect()->intended('dash');
            } else {
                echo " email & password not valid";
            }
        }

    }

    public function logout()
    {
        if (Auth::logout()) {
            return redirect()->route('login');
        }
    }
}

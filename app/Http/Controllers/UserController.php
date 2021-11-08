<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList()
    {
        $users =  User::all();

        return view('users.userList', compact('users'));
    }

    public function myPage()
    {
        

        return view('users.myPage');
    }

    public function castCreate(Request $request)
    {
        $request->validate([
            'cast_name' => 'required|string|max:255',
            'age' => 'required|integer',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'bust' => 'required|string|alpha|max:1',
            'phone_number' => 'string|numeric|digits_between:10,11',
            'ng_play' => 'string|max:255',
            'area' => 'required|string|',
            'experience' => 'required|string|max:255',
            'face_img1' => 'required|file|mimes:jpeg,png,jpg',
            'face_img2' => 'file|mimes:jpeg,png,jpg',
            'body_img1' => 'required|file|mimes:jpeg,png,jpg',
            'body_img2' => 'file|mimes:jpeg,png,jpg',
        ]);

        $cast = new Cast;
        $cast->fill($request->all());

        $face_img1 = $request['face_img1'];
        $face_img2 = $request['face_img2'];
        $body_img1 = $request['body_img1'];
        $body_img2 = $request['body_img2'];


        if(!empty($face_img1)) {
            $face1_path = \Storage::put('/public', $face_img1);
            $face1_path = explode('/', $face1_path);
            $cast->face_img1 = $face1_path[1];
        } else {
            $face1_path = null;
            $cast->face_img1 = $face1_path;
        }
        
        if(!empty($face_img2)) {
            $face2_path = \Storage::put('/public', $face_img2);
            $face2_path = explode('/', $face2_path);
            $cast->face_img2 = $face2_path[1];
        } else {
            $face2_path = null;
            $cast->face_img2 = $face2_path;
        }
        

        if(!empty($body_img1)) {
            $body1_path = \Storage::put('/public', $body_img1);
            $body1_path = explode('/', $body1_path);
            $cast->body_img1 = $body1_path[1];
        } else {
            $body1_path = null;
            $cast->body_img1 = $body1_path;
        }
        
        if(!empty($body_img2)) {
            $body2_path = \Storage::put('/public', $body_img2);
            $body2_path = explode('/', $body2_path);
            $cast->body_img2 = $body2_path[1];
        } else {
            $body2_path = null;
            $cast->body_img2 = $body2_path;
        }
        
        $cast->save();

        return redirect('/myPage')->with('flash_message', __('CastRegister'));
    }
}

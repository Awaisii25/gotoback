<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function ragester(Request $req){
        $formFields = $req->validate([
              "name" => ['required'],
              "age" => ['required'],
              "phone" => ['required'],
              "email" => ['required'],
              "password" => ['required'],
              "image" => ['required'],
        ]);
        $formFields['image'] = $req->file('image')->store('user_images', 'public');
        $formFields['password'] = bcrypt($formFields['password']);
        $user= User::create($formFields);
        auth()->login($user);
        return redirect('/');
    }
}

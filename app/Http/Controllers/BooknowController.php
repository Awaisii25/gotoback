<?php

namespace App\Http\Controllers;

use App\Models\Booknow;
use Illuminate\Http\Request;

class BooknowController extends Controller
{
    public function booknow(Request $req){
        $formFields = $req->validate([
            "name" => ['required'],
            "phone" => ['required'],
            "age" => ['required'],
            "email" => ['required'],
            "textarea" => ['required'],
        ]);
        Booknow::create($formFields);
        return back();

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Khan;
use Illuminate\Http\Request;

class backController extends Controller
{
    public function backdata(Request $req){
        $formFields = $req->validate([
            "name" => ['required'],
            "email" => ['required'],
            "contact" => ['required'],
            "textarea" => ['required'],
        ]);
        Khan::create($formFields);
        // echo "done";
        return back();
    }
}

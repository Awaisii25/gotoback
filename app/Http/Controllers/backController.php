<?php

namespace App\Http\Controllers;

use App\Models\Khan;
use Illuminate\Http\Request;

class backController extends Controller
{
    public function backdata(Request $req){
        $formFields = $req->validate([
            "name" => ['required','min:5'],
            "email" => ['required','min:10','max:30'],
            "contact" => ['required'],
            "textarea" => ['required'],
        ]);
        Khan::create($formFields);
        // echo "done";
        return back();
    }
}

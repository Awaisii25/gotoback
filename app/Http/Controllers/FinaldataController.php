<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use App\Models\Finaldata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FinaldataController extends Controller
{
   public function finaldata(Request $req){
    $formFields = $req->validate([
        "name" => ['required'],
        "email" => ['required'],
        "address" => ['required'],
        "business" => ['required'],
        "msg" => ['required'],
    ]);
     Finaldata::create($formFields);
    Mail::to('awaismarwan75@gmail.com')->send(new contactMail($formFields));
     return back();
}
}

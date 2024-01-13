<?php

namespace App\Http\Controllers;

use App\Models\Finaldata;
use Illuminate\Http\Request;

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
     Finaldata  ::create($formFields);
     return back();
}
}

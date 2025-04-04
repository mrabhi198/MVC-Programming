<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function index(){
        return view("form");
    }

    public function formdata(Request $request){
        $request->validate([
            "name"=>"Required",
            "email"=>"Required | email",
            "age"=> "numeric | max:10",
            "city"=>"Required"
        ],
    ["name.required"=>"Name Must Be Fill", "age.required"=>"Age Max Value is 10"]);

        return $request->all();
    }
}

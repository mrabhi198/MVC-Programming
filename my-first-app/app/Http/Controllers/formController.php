<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function index(){
        return view("form");
    }

    public function formdata(Request $request){
        return $request->all;
    }
}

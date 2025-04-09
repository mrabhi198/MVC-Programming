<?php

namespace App\Http\Controllers;
use App\Rules\Uppercase;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function index(){
        return view("custom");
    }

    // public function dataform(Request $request){
    //     return $request->all();
    // }

    // public function dataform(Request $request){
    //     $request->validate([
    //         "name"=>"Required",
    //         "email"=>"Required | email",
    //         "age"=> "numeric | max:10",
    //         "city"=>"Required"
    //     ]);
    //     return $request->all();
    // }

    public function dataform(Request $request){
        $request->validate([
            "name"=>["required", new Uppercase]
        ]);
        return $request->all();
    }
}

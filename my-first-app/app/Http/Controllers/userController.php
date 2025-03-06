<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function messagejs(){
        return "<script>alert('Hello Students')</script>";
    }

    public function req($num){
        return $num;
    }

    public function option($num = null){
        return $num;
    }

    public function default($num="Enter Value"){
        return $num;
    }

    //for render
    public function index(){
        return view("home");
    }

    public function datacompact(){
        $name = "Abc";
        return view("home", compact('name'));
    }

    public function dataarray(){
        $name= "Pqr";
        return view("home", ['name'=>$name]);
    }

    public function datawith(){
        return view("home")->with('name', "Xyz");
    }
}

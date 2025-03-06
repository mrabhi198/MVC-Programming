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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function getUser(){
        // return "Abhi";
        return view('user');
    }

    function getUserName($name){
        // return "Hello, this is $name";
        return view('about', ['name'=>$name]);
    }

    // function getView(){
    //     return view('admin/login');
    // }

    function getView(){
        // return view('admin.login');
        if(View::exists('admin.sign')){
            return view('admin.sign');
        }
        else {
            echo 'No view found';
        }
    }

    function userArray(){
        $name = "Anil";
        $user = ["aa", "ab", "abc"];
        return view('user', ['name'=>$name, 'user'=>$user]);
    }

    function subView(){
        return view('home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function addUser(Request $req){
        // echo "user added!!";
        echo $req->name;
        echo "<br>";
        echo $req->email;
        // return $req;
    }

    function users(Request $req){
        $req->validate([
            'name'=>'required | min: 3',
            'email'=>'required | email',
            'city'=>'required | uppercase',
            'skill'=>'required',
            'gender'=>'required'
        ],[
            'name.required'=>'this is custom error'
        ]);
        return $req;
    }
}

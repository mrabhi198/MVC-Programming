<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function setsession(){
        session()->put("user", "Mohit Kumar");
        return "Session set";
    }

    public function getsession(){
        // echo session()->get("user");
        if(session("user")){
            echo session()->get("user");
        }
        else{
            echo "Session not found";
        }
    }

    public function deletesession(){
        session()->forget("user");
        echo "Session Delete";
    }
}

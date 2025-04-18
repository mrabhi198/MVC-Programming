<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    // public function sendemail(){
    //     return "Email Sent!";
    // }

    // public function sendemail(){
    //     $to="kingallan318@gmail.com";
    //     $sub="Laravel testing mail";
    //     $msg="Hello Laravel First mail";
    //     Mail::to($to)->send(new WelcomeEmail($sub, $msg));
    //     return "Email Sent!";
    // }

    // public function sendemail(Request $request){
    //     $to=$request->to;
    //     $sub=$request->sub;
    //     $msg=$request->msg;
    //     Mail::to($to)->send(new WelcomeEmail($sub, $msg));
    //     return "Email Sent!";
    // }

    public function sendemail(Request $request){
        $name=$request->name;
        $city=$request->city;
        $course=$request->course;
        $fee=$request->fee;
        $gender=$request->gender;
        $add=$request->add;
        Mail::to($to)->send(new WelcomeEmail($name, $city, $course, $fee, $gender, $add));
        return "Email Sent!";
    }
}

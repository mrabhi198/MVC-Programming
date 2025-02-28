<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get("aman/{name}",function ($name){
    return $name;
});

Route::view("index","index");
Route::view("lpu","lpu");

// Data Passing
// array
// Route::get("show",function(){
//     $course="Laravel";
//     $fee=6000;
//     return view("user",["course"=>$course,"fee"=>$fee]);
// });
// compact
Route::get("show",function(){
    $course="Laravel";
    $fee=6000;
    return view("user",compact("course","fee"));
});
// // with
// Route::get("with",function(){
//     $course="Laravel";
//     $fee=6000;
//     return view("user")->with("course",$course)->with("fee",$fee);
// });
// // withname
// Route::get("show",function(){
//     $course="Laravel";
//     $fee=6000;
//     return view("user")->withCourse($course)->withFee($fee);
// });
Route::get("v1",function(){
    return view("user1");
});
Route::get("v2",function(){
    return view("user2");
});

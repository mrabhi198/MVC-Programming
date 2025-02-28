<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get("aman/{name}",function ($name){
//     return $name;
// });

// Route::view("index","index");
// Route::view("lpu","lpu");

// Data Passing
// array
// Route::get("show",function(){
//     $course="Laravel";
//     $fee=6000;
//     return view("user",["course"=>$course,"fee"=>$fee]);
// });
// compact
// Route::get("show",function(){
//     $course="Laravel";
//     $fee=6000;
//     return view("user",compact("course","fee"));
// });
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
// Route::get("v1",function(){
//     return view("user1");
// });
// Route::get("v2",function(){
//     return view("user2");
// });


// Route::get("data1/{name}", function($name){
//     return $name;
// });

//task1
// Route::get("num/{value}", function($value){
//     if ($value % 2 == 0){
//         return ("$value is even");
//     }
//     return ($value ." is odd");
// });

//task2
// Route::get("data/{num}", function($num){
//     if ($num >= 90 && $num <= 100){
//         return "Grade A";
//     } else if ($num >= 80 && $num < 90){
//         return "Grade B";
//     } else if ($num >= 70 && $num < 80){
//         return "Grade C";
//     } else if ($num >= 60 && $num < 70){
//         return "Grade D";
//     } else if ($num < 60 && $num >= 0){
//         return "fail";
//     }
//     return "not less than 0 or grater than 100";
// });

//28th Feb 2025
//name Route
// Route::get("admin/student/studentdata", function(){
//     return view("view1");
// })->name("data");

//->name() ➜ is function (called name route)

// Route::get("admin/student/studentcourse", function(){
//     return view("course");
// })->name("course");


//redirect webpage to course file
// Route::get("admin/student/redirect", function(){
//     return redirect()->route("course");
// });

//Response
Route::get("home", function(){
    return "Hello Laravel";
});

//above is request method

Route::get("next", function(){
    return response("Data Set")->header("Content-Type", "text/plain");
});
//OR
Route::get("prev", function(){
    return response("Data Set")->header("Content-Type", "text/html");
});
//header is only for server not for user

Route::get("json", function(){
    return response()->json(["Name"=>"Mojit","City"=>"Jalandhar","Course"=>"Laravel"]);
});
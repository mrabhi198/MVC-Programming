<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\userController;


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
// Route::get("home", function(){
//     return "Hello Laravel";
// });

// // //above is request method

// Route::get("next", function(){
//     return response("Data Set")->header("Content-Type", "text/plain");
// });
// //OR
// Route::get("prev", function(){
//     return response("Data Set")->header("Content-Type", "text/html");
// });
// //header is only for server not for user

// Route::get("json", function(){
//     return response()->json(["Name"=>"Mojit","City"=>"Jalandhar","Course"=>"Laravel"]);
// });

//----------------END OF UNIT 2----------------
//--------------------UNIT 3-------------------

// Route::get("controller1", [userController::class, "message"]);

// Route::get("html", [userController::class, "messagehtml"]);
// Route::get("css", [userController::class, "messagecss"]);

// //parameters
// Route::get("re/{num}", [userController::class, "req"]);
// Route::get("op/{num?}", [userController::class, "option"]);
// Route::get("de/{num?}", [userController::class, "default"]);

// //return view
// Route::get("index", [userController::class, "index"]);

// //data passing
// Route::get("array", [userController::class, "dataarray"]);
// Route::get("compact", [userController::class, "datacompact"]);
// Route::get("with", [userController::class, "datawith"]);

// //blade templates
// Route::get('index', function(){
//     return view("home");
// });

// Route::get('/status/{status}', function ($status) {
//     return view('status', ['status' => $status]);
// });

// Route::get('/status/{role}', [userController::class, 'show']);

// Route::get('data/{role}',function($role){
//     switch($role){
//         case "admin":
//             return "full access";
    
//         case "teacher":
//             return "limited access";
    
//         case "viewer":
//             return "only view access";
//     }
// });

//resourece Controller
// use App\Http\Controllers\ResourceController;

// // Route::get("profile", [ResourceController::class]);
// Route::get("profile", [ResourceController::class, "index"]);
// Route::get("edit", [ResourceController::class, "create"]);

// Route::resource("pro", ResourceController::class);

// //parameter validate
// Route::get('data/{num}', function($num){
//     return $num;
// })->whereNumber('num');

// Route::get('data1/{num}', function($num){
//     return $num;
// })->wherealpha('num');

// Route::get('data2/{num}', function($num){
//     return $num;
// })->where('num', "[A-Za-z0-9]+");

// Route::get("data123", function(){
//     return "Data 123";
// });

// prefix, controller, routes, form, middleware, 

// Session
// use App\Http\Controllers\SessionController;
// Route::get("set", [SessionController::class, "setsession"]);
// Route::get("get", [SessionController::class, "getsession"]);
// Route::get("delete", [SessionController::class, "deletesession"]);

//Form
// Route::get("form", function(){
//     return view("form");
// });

// use App\Http\Controllers\formController;
// Route::get("formdata", [formController::class, "index"]);
// Route::post("formdata", [formController::class, "formdata"]);

//Form Validation
// use App\Http\Controllers\formController;
// Route::get("formdata", [formController::class, "index"]);
// Route::post("formdata", [formController::class, "formdata"]);


//Custom validation
// use App\Http\Controllers\CustomController;
// Route::get("index", [CustomController::class, "index"]);
// Route::post("dataform", [CustomController::class, "dataform"]);

//Image Upload
// use App\Http\Controllers\UploadImage;
// Route::get("image", [UploadImage::class, "image"]);
// Route::post("imagedata", [UploadImage::class, "imagedata"]);

//Email
use App\Http\Controllers\EmailController;
Route::post("sendemail", [EmailController::class, "sendemail"]);
Route::view("sendemail", "emailform");
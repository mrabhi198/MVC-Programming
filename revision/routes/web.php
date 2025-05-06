<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HandlingController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('home', function(){
//     return view('home');
// });

// Route::view('any', 'anything');

// redirect home -> welcome
// Route::redirect('/home', '/');

// Route::get('/about/{name}', function($name){
//     return view('/about', ['name'=>$name]);
// });

//controller
// Route::get('user',[UserController::class, 'getUser']);
// Route::get('username/{name}', [UserController::class, 'getUserName']);
// Route::get('login', [UserController::class, 'getView']);
// Route::get('array', [UserController::class, 'userArray']);

// Route::get('sub', [UserController::class, 'subView']);

// FORM
// Route::view('form', 'userForm');
// Route::post('adduser', [FormController::class, 'addUser']);

//form handling
// Route::view('hand', 'formHandling');
// Route::post('addusers', [HandlingController::class, 'addUsers']);

//form validation
Route::view('form', 'userForm');
Route::post('adduser', [FormController::class, 'users']);
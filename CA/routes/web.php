<?php

// use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('set/{lang}', function ($lang) {
//     return response("lang set to $lang")->cookie('pre_lang', $lang, 60);
// });

// Route::get('language', function (Request $request) {
//     $lang = $request->cookie('pre_lang');

//     if ($lang === 'en') {
//         return "Welcome!";
//     } elseif ($lang === 'fr') {
//         return "Bienvenue!";
//     } else {
//         return "Please select your preferred language.";
//     }
// });


// Route::get('clear', function () {
//     return response("cleared")->cookie('pre_lang', '', -1);
// });

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

Route::match(['get', 'post'], '/set-language', function (Request $request) {
    $language = $request->input('language', 'en'); 
    $cookie = Cookie::make('preferred_language', $language, 1440);
    return response()->json(['message' => 'Language preference saved'])->cookie($cookie);
});
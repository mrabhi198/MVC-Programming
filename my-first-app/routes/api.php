<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


use App\Http\Controllers\RestApiController;

Route::view("form", "restdata");
Route::view("form/{id}", "restdata");
Route::get('form/{id}', function ($id) {
    $data = App\Models\RestApiModel::find($id);
    return view('restdata', compact('data'));
});

Route::apiResource('restapi', RestApiController::class);
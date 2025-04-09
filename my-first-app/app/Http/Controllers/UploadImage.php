<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImage extends Controller
{
    public function image(){
        return view("uploadimage");
    }

    // public function imagedata(Request $request){
    //     $request->file("image");
    //     return "Image Uploaded";
    // }

    // public function imagedata(Request $request){
        
    //     return $request->file("image")->all()->store();
    // }

    // public function imagedata(Request $request){
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
    //     ]);

    //     $path = $request->file('image')->store('uploads', 'public');

    //     return "Image uploaded successfully. File path: " . $path;
    // }

    // public function imagedata(Request $request){
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    //     ]);
        
    //     $d=public_path('images');
    //     return $request->file('image')->move($d,$request->file('image')->getClientOriginalName());
    // }

    public function imagedata(Request $request){
        $file=$request->file('image');
        $path=$file->store('LPU');
        return $path;
    }
}

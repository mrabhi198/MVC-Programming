<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImage extends Controller
{
    public function image(){
        return view("uploadimage");
    }

    public function imagedata(Request $request){
        return $request->file("image");
    }
}

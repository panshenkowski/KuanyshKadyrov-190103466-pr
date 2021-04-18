<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{


    public function upload(Request $request)
    {
        $path = $request->file('image')->store('uploads','public');

        return view('images' ,['path'=> $path]);
    }
}

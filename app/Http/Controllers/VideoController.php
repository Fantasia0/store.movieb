<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{

    public function index(){
        $videos=Video::all();
        return view('home', compact('videos'));
    }

    public function upload(){

        return view('fileUpload');
    }

    public function store(Request $request){


       $filename = $request->file('file')->storePublicly('video', 's3');

       $urlname= "https://moviebvideo.s3.eu-central-1.amazonaws.com/";

       $auth = Auth::user()->id;
       $path = ($urlname . $filename);

       $a = new Video;
       $a->title = $request->title;
       $a->path = $path;
       $a->video_id = $auth;
       $a->category_id= $request->category;
       $a->save();

        return back();
    }
}

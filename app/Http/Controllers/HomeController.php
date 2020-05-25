<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home' , ['posts' => Post::simplepaginate(4)]);
    }

    public function show($id){
        // return Post::find($id);
        return view('post', ['post' => Post::find($id)]);
    }
}

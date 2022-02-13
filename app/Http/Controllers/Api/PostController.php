<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        // $posts = Post::all();
        $posts = Post::paginate(5);

        return response()->json($posts); // JSON diretto
        // return response()->json(compact('posts')); // oggetto posts tramite JSON

    }
}

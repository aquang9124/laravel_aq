<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;

class BlogController extends Controller
{
    public function show($post_id) 
    {
        $post = Post::find($post_id);

        return view('content', compact('post'));
    }
}

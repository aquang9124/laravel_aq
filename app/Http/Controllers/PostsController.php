<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Http\Requests;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function create() 
    {
        $user = Auth::user();
        if ($user->is_admin) {
            return view('posts');
        }
        else {
            $posts = Post::all();
            $user_admin = $user->is_admin;
            return view('dashboard', compact('posts', 'user_admin'));
        }
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
        ]);
        $user_id = Auth::id();
        $post = new Post;
        $post::create([
            'title' => $request->title, 
            'content' => $request->content, 
            'user_id' => $user_id, 
            'description' => $request->description
        ]);

        return back();
    }

    public function edit(INT $post_id) 
    {
        $post = Post::find($post_id);
        return view('edit', compact('post'));
    }

    public function update(Request $request, $post_id)
    {
        $post = Post::find($post_id);
        $newPost = $request->all();
        $post->content = $newPost['content'];
        $post->save();

        return back();
    }

    public function destroy($post_id) 
    {
        $post = Post::find($post_id);
        $post->delete();

        return back();
    }
}

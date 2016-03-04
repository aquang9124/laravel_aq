<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Message;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {
        $posts = Post::all();
        $user = Auth::user();
        $user_admin = $user->is_admin;
        return view('dashboard', compact('posts', 'user_admin'));
    }

    public function show()
    {
        $messages = Message::all();
        $count = Message::count();
        return view('notification', compact('messages', 'count'));
    }
}

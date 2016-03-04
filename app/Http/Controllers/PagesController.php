<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Message;
use App\Http\Requests;

class PagesController extends Controller
{
    public function index() 
    {
    	$posts = Post::all();
    	return view('welcome', compact('posts'));	
    }

    public function show()
    {
    	return view('dashboard');
    }

    public function about() 
    {
    	return view('about');	
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|max:255',
    		'email' => 'required|email|max:255',
    		'message' => 'required',
    	]);
    	
    	$message = Message::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'body' => $request->message
    	]);

    	return back();
    }
}

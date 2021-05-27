<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	return view('posts.index');
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	$post = new Post;

    	Post::create([
    		'title' => request('title'),
    		'body' => request('body')
    	]);

    	return redirect('/');
    }


    public function show()
    {
    	return view('posts.show');
    }
}

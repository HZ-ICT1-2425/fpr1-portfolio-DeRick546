<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of Posts.
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new Post.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created Post in storage.
     */
    public function store()
    {
        // Create a new Post model object
        $post = new Post();
        // Copy request data (representing the form inputs) to the
        // object's properties
        $post->title = request()['title'];
        $post->excerpt = request()['excerpt'];
        $post->body = request()['body'];
        // Save the model's state to the database
        // (which means inserting a new record in this case)
        $post->save();
        // Redirect to the blog index page
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified Post.
     */
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\Session\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /// Validate the data using request()->validate()
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        // Store in the database
        $post = new Post;
        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];
        $post->save();

        session()->flash('success', 'The blog was successfully saved!');
        // Redirect to another page
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        // Find the post by ID and update its title and body
        $post = Post::findOrFail($id); // Use findOrFail for more robust error handling
        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];

        // Save the post to the database
        $post->save();

        // Flash a success message to the session using session() helper
        session()->flash('success', 'This post was successfully saved.');

        // Redirect the user to the show route of the updated post
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        session()->flash('success', 'The post was succesfully deleted');
        return redirect()->route('posts.index');
    }
}

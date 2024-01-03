<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardPostContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|url',
            'linkimage' => 'required|url'
            // Add other validation rules as needed
        ]);

        // Create a new post instance
        $post = new Post;
        $post->judul = $request->judul;
        $post->link = $request->link;
        $post->linkimage = $request->linkimage;
        // Set other attributes as needed

        // Save the post to the database
        $post->save();

        // Redirect to the index page or any other page after successful storage
        return redirect()->route('post.show')->with('success', 'Post successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // Retrieve all posts from the database
        $posts = Post::all();

        // Pass the posts to the view
        return view('dashboard.posts.show', compact('posts'));
    }

    public function create()
    {
        // Retrieve all posts from the database
        $posts = Post::all();

        // Pass the posts to the view
        return view('dashboard.posts.create', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('dashboard.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // Validate the request data
        $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|url',
            'linkimage' => 'required|url'
            // Add other validation rules as needed
        ]);

        // Update the post model with the validated data
        $post->update([
            'judul' => $request->judul,
            'link' => $request->link,
            'linkimage' => $request->linkimage,
            // Add other fields as needed
        ]);

        // Redirect to the show page or any other page after successful update
        return redirect()->route('post.show', ['post' => $post->id])->with('success', 'Post successfully updated.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($post)
    {
        $post = Post::find($post);
        // Delete the post
        $post->delete();

        // Redirect to the index page or any other page after successful deletion
        return redirect()->route('post.show')->with('success', 'Post successfully deleted.');
    }
}

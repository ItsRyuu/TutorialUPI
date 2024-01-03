<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;

class DashboardAbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.absens.show');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retrieve all posts from the database
        $absens = Absen::all();

        // Pass the posts to the view
        return view('dashboard.absens.create', compact('absens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|url',
            // Add other validation rules as needed
        ]);

        // Create a new post instance
        $absen = new Absen;
        $absen->judul = $request->judul;
        $absen->link = $request->link;
        // Set other attributes as needed

        // Save the absen to the database
        $absen->save();

        // Redirect to the index page or any other page after successful storage
        return redirect()->route('absen.show')->with('success', 'Post successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // Retrieve all posts from the database
        $absens = Absen::all();

        // Pass the posts to the view
        return view('dashboard.absens.show', compact('absens'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $absens = Absen::find($id);
        return view('dashboard.absens.edit', compact('absens'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absen $absen)
    {
        // Validate the request data
        $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|url',
            // Add other validation rules as needed
        ]);

        // Update the post model with the validated data
        $absen->update([
            'judul' => $request->judul,
            'link' => $request->link,
            // Add other fields as needed
        ]);

        // Redirect to the show page or any other page after successful update
        return redirect()->route('absen.show', ['absen' => $absen->id])->with('success', 'Post successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($absen)
    {
        $absen = Absen::find($absen);
        // Delete the post
        $absen->delete();

        // Redirect to the index page or any other page after successful deletion
        return redirect()->route('absen.show')->with('success', 'Post successfully deleted.');
    }
}

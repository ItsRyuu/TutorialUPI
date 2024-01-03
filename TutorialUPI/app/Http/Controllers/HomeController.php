<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        // Retrieve all posts from the database
        $posts = Post::all();
        // Retrieve all posts from the database
        $absens = Absen::all();

        // Pass the posts to the view
        return view('home', compact('absens', 'posts'));
    }



    public function redirects()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.admin');
        } else {
            return view('home');
        }
    }
}

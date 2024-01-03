<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Absen;


class DashboarHomeAbsensiController extends Controller
{
    public function show()
    {
        // Retrieve all posts from the database
        $absens = Absen::all();

        // Pass the posts to the view
        return view('home', compact('absens'));
    }
}

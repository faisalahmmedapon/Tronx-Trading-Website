<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{


    public function blogs()
    {
        return view('frontend.blogs');
    }

    public function blog()
    {
        return view('frontend.blog');
    }
}

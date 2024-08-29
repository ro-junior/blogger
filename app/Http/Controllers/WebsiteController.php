<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('web.home', compact('blogs'));
    }
}

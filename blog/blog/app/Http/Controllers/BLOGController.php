<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BLOGController extends Controller
{
    public function index()
    {
    $blogs = Blog::all();
    dd($blogs);
    return view('pages.admin.blogs.index', compact('blogs'));
    }
}

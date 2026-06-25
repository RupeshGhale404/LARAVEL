<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BLOGController extends Controller
{
    public function index()
{
$blogs= [
  [
    'id' => 1,
    'title' => "Introduction to Web Development",
    'img' => "web-development.jpg",
    'desc' =>   [
      "Web development is the process of building websites.",
      "HTML is used for structure, CSS for styling, and JavaScript for interactivity.",
      "Modern web applications often use frameworks like React and Laravel."
    ]
  ],
    [
    'id' => 2,
    'title' => "Getting Started with Laravel",
    'img' => "laravel.jpg",
    'desc' => [
      "Laravel is a PHP framework for building web applications.",
      "It follows the MVC architecture pattern.",
      "Laravel provides features like routing, migrations, Eloquent ORM, and authentication."
    ]
    ]
];

    return view('pages.admin.blogs.index', compact('blogs'));
    }
    public function create()
    {
    $blogs = Blog::all();

    return view('pages.admin.blogs.create  ', compact('blogs'));
    }
}


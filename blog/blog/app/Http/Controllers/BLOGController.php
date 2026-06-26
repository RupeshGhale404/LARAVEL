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
    public function store(Request $request)
{
    dd($request);
    // 1. Validate incoming data
    $request->validate([
        'title' => 'required|string|max:255',
        'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'desc' => 'required|string', // Validating 'desc'
    ]);

    // 2. Handle file upload safely
    $imagePath = null;
    if ($request->hasFile('img')) {
        // Fixed typo from ->$tore to ->store and assigned it to $imagePath
        $imagePath = $request->file('img')->store('blog_images', 'public');
    }

    // 3. Create the record (Fixed double colon and added missing semicolon)
    Blog::create([
        'title' => $request->title,
        'desc'  => $request->desc, // Match this with your validation/form input
        'img'   => $imagePath,
    ]); // <-- Added missing semicolon here

    // 4. Redirect with success message
    return redirect()->route('blogs.index')->with('success', 'Blog created successfully!'); // <-- Added missing semicolon here
}
}

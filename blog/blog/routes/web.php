<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebpageController;
use App\Http\Controllers\BLOGController;


Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/contact',[WebpageController::class,'contact'])->name('contact');
});
Route::get('/blog',function(){
    return view('pages.blog');
})->name('blog');
Route::get('/test',function(){
    return view('test');      
});
Route::get('/layout',function(){
    return view('layout.layout');      
});
Route::get('/admin1',function(){
    return view('adminlayout.adminlayout');      
});


Route::get('/about',function(){
    return view('about.about');      
})->name('about');
Route::get('/home',function(){
    return redirect()->route('home');
});

Route::get('/blogs/index',[BLOGController::class,'index']);
Route::get('/blogs/create',[BLOGController::class,'create']);


Route::get('/blogs',[WebpageController::class,'blogs'])->name('blogs');

Route::get('/blogdetail/{id}',[WebpageController::class,'blogdetail'])->name('blogdetail');

require __DIR__.'/auth.php';

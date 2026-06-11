<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebpageController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/test',function(){
    return view('test');      
});
Route::get('/layout',function(){
    return view('layout.layout');      
});
Route::get('/about',function(){
    return view('about.about');      
})->name('about');
Route::get('/home',function(){
    return redirect()->route('home');
});

Route::get('/blogs',[WebpageController::class,'blogs'])->name('blogs');
Route::get('/contact',[WebpageController::class,'contact'])->name('contact');
Route::get('/blogdetail/{id}',[WebpageController::class,'blogdetail'])->name('blogdetail');
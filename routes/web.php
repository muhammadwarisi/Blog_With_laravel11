<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('blog.pages.home');
});

Route::get('/tentang', function(){
    return view('blog.pages.tentang');
});

Route::get('/posts', function(){
    return view('blog.pages.posts', ['title' => 'Baca Berita Di Sini','posts' =>Post::all() ]);
});

Route::get('/posts/{post:slug}', function ($slug){
    $post = Post::find($slug);
     return view('blog.pages.post', ['post' => $post]);
});

Route::get('/login', function(){
    return view('admin.pages.auth.login');
});

Route::get('/dashboard', function(){
    return view('admin.pages.admin.dashboard');
});

<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SessionController;
use App\Models\Post;
use App\Models\User;
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

// Route::get('/posts', function(){
//     return view('blog.pages.posts', ['title' => 'Baca Berita Di Sini','posts' =>Post::all() ]);
// });

Route::get('/posts', [BlogController::class, 'index']);
Route::get('/authors/{user}', [BlogController::class, 'tampil']);

Route::resources([
    '/dashboard' => PostsController::class,
    'dashboard.create' => PostsController::class,
]);


Route::get('/posts/{post:slug}', function (Post $post){
    // $post = Post::find($slug);
     return view('blog.pages.post', ['post' => $post]);
});
// Route::get('/authors/{user}', function (User $user){
//      return view('blog.pages.posts', ['title' => 'Article By ' . $user->name,'posts' => $user->posts]);
// });

Route::get('/sesi', [SessionController::class, 'index']);
Route::get('/register', [SessionController::class, 'register']);
Route::post('/sesi/register', [SessionController::class, 'create']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);

// Route::get('/dashboard', function(){
//     return view('admin.pages.admin.dashboard');
// });

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(12);
        return view('blog.pages.posts', ['title' => 'Baca Berita Di Sini', 'posts' =>$posts]);
    }

    public function tampil(User $user)
    {
        $user = User::paginate(6);
        return view('blog.pages.posts', ['title' => 'Article By ' . $user->name,'posts' => $user->posts]);
    }
}

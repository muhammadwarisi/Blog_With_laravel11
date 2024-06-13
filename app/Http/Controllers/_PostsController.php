<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::paginate(12);

        return view('blog.pages.posts', ['title' => 'Baca Berita Di Sini', 'posts' =>$posts]);
    }
}

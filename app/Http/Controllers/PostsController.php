<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('author_id', Auth::id())->paginate(5);

        return view('admin.pages.admin.dashboard', ['title' => 'list Blog', 'posts' =>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.admin.createpost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'slug' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg'
        ]);
        $gambar_file = $request->file('gambar');
        $gambar_ekstensi = $gambar_file->extension();
        $gambar_nama = date('ymdhis').".". $gambar_ekstensi;
        $gambar_file->move(public_path('img/banner'), $gambar_nama);

        $data = [
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'slug' => $request->input('slug'),
            'gambar' => $gambar_nama,
            'author_id' => Auth::id(),
        ];

        Post::create($data);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Post::where('id', $id)->first();
        return view('admin.pages.admin.editpost')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'slug' => 'required',
        ]);

        $data = [
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'slug' => $request->input('slug'),
        ];
        Post::where('id', $id)->update($data);
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id', $id)->delete();
        return redirect('/dashboard');
    }
}

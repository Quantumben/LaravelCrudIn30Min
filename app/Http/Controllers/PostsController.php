<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
         $posts = Post::all();

          //return view('index', ['posts' => $posts]);
         return view('index', compact('posts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        request()->validate([

            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([

            'title' => request('title'),
            'content' => request('content'),
        ]);

        return redirect('/posts');
    }

    public function edit(Post $post)
    {
        return view('edit', compact('post'));
    }

    public function update(Post $post)
    {
        //dd(request()->all());

        request()->validate([

            'title' => 'required',
            'content' => 'required',
        ]);


        $post->update([
            'title' => request('title'),

            'content' => request('content'),
        ]);

        return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts');
    }

}

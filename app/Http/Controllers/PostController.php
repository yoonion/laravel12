<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $title = $request->validated()['title'];
        $content = $request->validated()['content'];

        $post = Post::create([
            'user_id' => 1,
            'title' => $title,
            'content' => $content,
        ]);

        return redirect()->route('posts.show', $post->id);
    }
}

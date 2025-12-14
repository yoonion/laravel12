<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
        $validated = $request->validated();
        $title = $validated['title'];
        $content = $validated['content'];

        $post = Post::create([
            'user_id' => auth()->id(),
            'title' => $title,
            'content' => $content,
        ]);

        return redirect()->route('posts.show', $post->id);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(StorePostRequest $request, Post $post)
    {
        Gate::authorize('update', $post);

        $validated = $request->validated();
        $post->update($validated);

        return redirect()->route('posts.show', $post->id);
    }

    public function destroy(Post $post)
    {
        Gate::authorize('delete', $post);

        $post->delete();

        return redirect()->route('posts.index');
    }
}

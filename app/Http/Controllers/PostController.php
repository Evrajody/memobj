<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Post::class);

        return inertia('Posts/Index', [
            'posts' => fn() => Post::latest()->paginate(10),
        ]);
    }

    public function create()
    {
        $this->authorize('create', Post::class);

        // $categories = Categorie::all();

        return inertia('Posts/Create');
    }

        public function store(PostRequest $request)
    {
        $this->authorize('create', Post::class);

        $post = Post::create($request->validated());

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        $this->authorize('view', $post);

        return new PostResource($post);
    }

    public function update(PostRequest $request, Post $post)
    {
        $this->authorize('update', $post);

        $post->update($request->validated());

        return new PostResource($post);
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return response()->json();
    }
}

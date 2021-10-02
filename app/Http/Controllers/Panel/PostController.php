<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\PostRequest;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(PostRepository $post)
    {
        $posts = $post->all();
        return view('panel.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('panel.posts.create');
    }

    public function store(PostRequest $request, PostRepository $post)
    {
        $post->create($request->all());
        return redirect()->route('panel.posts.index');
    }

    public function show($id, PostRepository $post)
    {
        $post = $post->find($id);
        return view('panel.posts.show', compact('post'));
    }

    public function edit($id, PostRepository $post)
    {
        $post = $post->find($id);
        return view('panel.posts.edit', compact('post'));
    }

    public function update(PostRequest $request, $id, PostRepository $post)
    {
        $post->update($id, $request->all());
        return redirect()->route('panel.posts.index');
    }

    public function destroy($id, PostRepository $post)
    {
        $post->delete($id);
        return redirect()->route('panel.posts.index');
    }
}

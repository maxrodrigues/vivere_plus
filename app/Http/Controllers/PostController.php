<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Repositories\PostRepository;

class PostController extends Controller
{
    public function index(PostRepository $postRepository)
    {
        $posts = $postRepository->all();
        return view('site.blog', compact('posts'));
    }

    public function detail($slug, PostRepository $postRepository)
    {
        $post = $postRepository->findBySlug($slug);
        $comments = $postRepository->getComments($post->id);

        return view('site.blog-detail', compact('post', 'comments'));
    }

    public function addComment(CommentRequest $request, $id, PostRepository $postRepository)
    {
        $postRepository->createComment($id, $request->all());
        return redirect()->route('blog.detail', ['slug' => $postRepository->find($id)->slug]);
    }
}

<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Support\Str;

class PostRepository
{
    protected $post;
    public function __construct(Post $model)
    {
        $this->post = $model;
    }

    public function all()
    {
        return $this->post::all();
    }

    public function find($id)
    {
        return $this->post::find($id);
    }

    public function findBySlug($slug)
    {
        $post = $this->post::where('slug', $slug)->first();
        return $post;
    }

    public function create(array $attributes)
    {
        $attributes['slug'] = $this->setSlug($attributes['title']);
        $post = $this->post::create($attributes);

        return $post;
    }

    public function update($id, array $attributes)
    {
        $post = $this->post->find($id);
        $attributes['slug'] = $this->setSlug($attributes['title']);
        $post->fill($attributes);

        return $post->save();
    }

    public function delete($id)
    {
        $post = $this->post->find($id);
        return $post->delete();
    }

    public function getComments($id)
    {
        return $this->post->find($id)->comments->where('status', true);
    }

    public function createComment($id, array $attributes)
    {
        $post = $this->post->find($id);
        return $post->comments()->create($attributes);
    }

    public function setSlug($title)
    {
        return Str::slug($title);
    }
}

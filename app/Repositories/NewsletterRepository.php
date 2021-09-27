<?php

namespace App\Repositories;

use App\Models\Newsletter;

class NewsletterRepository
{
    protected $repository;

    public function __construct(Newsletter $model)
    {
        $this->repository = $model;
    }

    public function all()
    {
        return $this->repository::all();
    }

    public function create(array $attributes)
    {
        return $this->repository::create($attributes);
    }
}

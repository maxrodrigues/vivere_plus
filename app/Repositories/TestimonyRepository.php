<?php

namespace App\Repositories;

use App\Models\Testimony;

class TestimonyRepository
{
    protected $repository;

    public function __construct(Testimony $model)
    {
        $this->repository = $model;
    }

    public function all()
    {
        return $this->repository::all();
    }

    public function find($id)
    {
        $testimony = $this->repository::find($id);
        return $testimony;
    }

    public function store(array $attributes)
    {
        $testimony = $this->repository::create($attributes);
        return $testimony;
    }

    public function update($id, array $attributes){
        $testimony = $this->repository->find($id);
        $testimony->fill($attributes);
        return $testimony->save();
    }

    public function delete($id){
        $testimony = $this->repository->find($id);
        return $testimony->delete();
    }
}

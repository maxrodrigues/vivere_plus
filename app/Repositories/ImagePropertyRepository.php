<?php

namespace App\Repositories;

use App\Models\ImageProperty;

class ImagePropertyRepository
{

    protected $repository;
    public function __construct(ImageProperty $model)
    {
        $this->repository = $model;
    }

    public function all($propertyId)
    {
        return $this->repository::where('property_id', $propertyId)->get();
    }

    public function find($id)
    {
        $this->repository::find($id);
    }

    public function countPropertyImages($propertyId)
    {
        return $this->repository::where('property_id', $propertyId)->count();
    }

    public function setMain($id)
    {
        $repository = $this->repository->find($id);

        $this->repository::where('property_id', $repository->property_id)->update([
            'is_main' => false
        ]);

        $repository->is_main = true;

        return $repository->save();
    }

    public function setAlt($id, $alt)
    {
        $repository = $this->repository->find($id);
        $repository->alt = $alt;

        return $repository->save();
    }
}

<?php

namespace App\Repositories;

use App\Models\TypeAttributes;

class TypeAttributeRepository
{
    protected $typeAttribute;

    public function __construct(TypeAttributes $model)
    {
        $this->typeAttribute = $model;
    }

    public function all()
    {
        return $this->typeAttribute::orderBy('name')->get();
    }

    public function store(array $attributes)
    {
        return $this->typeAttribute::create($attributes);
    }

    public function find($id)
    {
        return $this->typeAttribute::find($id);
    }

    public function update($id, array $attributes)
    {
        $typeAttribute = $this->typeAttribute->find($id);
        $typeAttribute->fill($attributes);
        return $typeAttribute->save();
    }

    public function delete($id)
    {
        $typeAttribute = $this->typeAttribute->find($id);
        return $typeAttribute->delete();
    }
}

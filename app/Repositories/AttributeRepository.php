<?php

namespace App\Repositories;

use App\Models\Attribute;
use App\Models\TypeAttributes;

class AttributeRepository
{
    protected $attribute;

    public function __construct(Attribute $model)
    {
        $this->attribute = $model;
    }

    public function all()
    {
        return $this->attribute::orderBy('name')->with('type')->get();
    }

    public function types()
    {
        return TypeAttributes::all();
    }

    public function find($id)
    {
        return $this->attribute::find($id);
    }

    public function store(array $attributes)
    {
        return $this->attribute::create($attributes);
    }

    public function update($id, array $newAttributes)
    {
        $attributes = $this->attribute->find($id);
        $attributes->fill($newAttributes);
        return $attributes->save();
    }

    public function delete($id)
    {
        $attribute = $this->attribute->find($id);
        return $attribute->delete();
    }
}

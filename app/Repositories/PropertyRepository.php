<?php

namespace App\Repositories;

use App\Models\Property;
use Illuminate\Support\Str;

class PropertyRepository
{

    protected $property;

    public function __construct(Property $model)
    {
        $this->property = $model;
    }

    public function all()
    {
        return $this->property::all();
    }

    public function find($id)
    {
        return $this->property::find($id);
    }

    public function findBySlug($slug)
    {
        return $this->property::where('slug', $slug)->first();
    }

    public function store(array $attributes)
    {
        $attributes['slug'] = Str::slug($attributes['name']);
        $property = $this->property->create($attributes);
        $property->attributes()->sync($attributes['attribute']);
        return $property;
    }

    public function storeImage($id, $attributes){
        $property = $this->property->find($id);
        return $property->images()->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        $attributes['slug'] = Str::slug($attributes['name']);
        $property = $this->property->find($id);
        $property->fill($attributes);
        $property->attributes()->sync($attributes['attribute']);

        return $property->save();
    }

    public function destroy($id)
    {
        $property = $this->property->find($id);
        return $property->delete();
    }


}

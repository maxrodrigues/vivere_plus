<?php

namespace App\Repositories;

use App\Models\Property;

class PropertyRepository {

    protected $property;

    public function __construct(Property $model) {
        $this->property = $model;
    }

    public function all() {
        return $this->property::all();
    }

    public function find($id) {
        return $this->property::find($id);
    }

    public function store(array $attributes){
        $property = $this->property->create($attributes);
        $property->attributes()->sync($attributes['attribute']);
        return $property;
    }

    public function update(array $attributes, $id){
        $property = $this->property->find($id);
        $property->fill($attributes);
        $property->attributes()->sync($attributes['attribute']);

        return $property->save();
    }

    public function destroy($id) {
        $property = $this->property->find($id);
        return $property->delete();
    }
}

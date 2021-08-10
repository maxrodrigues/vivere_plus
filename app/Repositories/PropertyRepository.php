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
}

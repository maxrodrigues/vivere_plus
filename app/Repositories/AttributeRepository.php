<?php

namespace App\Repositories;

use App\Models\Attribute;

class AttributeRepository
{
    protected $attribute;

    public function __construct(Attribute $model)
    {
        $this->attribute = $model;
    }

    public function all()
    {
        return $this->attribute::orderBy('name')->get();
    }
}

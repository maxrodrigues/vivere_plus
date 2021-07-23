<?php

namespace App\Repositories;

use App\Models\TypeImmobile;

class TypeImmobileRepository
{
    protected $typeImmobile;

    public function __construct(TypeImmobile $typeImmobile)
    {
        $this->typeImmobile = $typeImmobile;
    }

    public function all()
    {
        return $this->typeImmobile::orderBy('name')->get();
    }

    public function store(array $attributes)
    {
        return $this->typeImmobile::create($attributes);
    }

    public function find($id)
    {
        return $this->typeImmobile::find($id);
    }

    public function update($id, array $attributes)
    {
        $typeImmobile = $this->typeImmobile->find($id);
        $typeImmobile->fill($attributes);
        return $typeImmobile->save();
    }

    public function delete($id){
        $typeImmobile = $this->typeImmobile->find($id);
        return $typeImmobile->delete();
    }
}

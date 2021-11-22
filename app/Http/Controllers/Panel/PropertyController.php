<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\PropertyRequest;
use App\Models\TypeAttributes;
use App\Repositories\PropertyRepository;
use App\Repositories\TypeImmobileRepository;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    protected $property, $types, $typeAttributes;

    public function __construct(
        PropertyRepository $repository,
        TypeImmobileRepository $type,
        TypeAttributes $typeAttributes
    ){
        $this->property = $repository;
        $this->type = $type;
        $this->typeAttributes = $typeAttributes;
    }

    public function index()
    {
        $properties = $this->property->all();
        return view('panel.property.index', compact('properties'));
    }

    public function create()
    {
        $types = $this->type->all();
        $typeAttributes = $this->typeAttributes->all();
        return view('panel.property.create', compact('types', 'typeAttributes'));
    }

    public function store(PropertyRequest $request)
    {
        $this->property->store($request->all());
        return redirect()->route('panel.property.index');
    }

    public function show($id)
    {
        $types = $this->type->all();
        $typeAttributes = $this->typeAttributes->all();
        $property = $this->property->find($id);

        return view('panel.property.show', compact('property', 'types', 'typeAttributes'));
    }

    public function edit($id)
    {
        $types = $this->type->all();
        $typeAttributes = $this->typeAttributes->all();
        $property = $this->property->find($id);

        return view('panel.property.edit', compact('property', 'types', 'typeAttributes'));
    }

    public function update(PropertyRequest $request, $id)
    {
        $this->property->update($request->all(), $id);
        return redirect()->route('panel.property.index');
    }

    public function destroy($id)
    {
        $this->property->destroy($id);
        return redirect()->route('panel.property.index');
    }
}

<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\TypeAttributeRequest;
use App\Repositories\TypeAttributeRepository;
use Illuminate\Http\Request;

class TypeAttributeController extends Controller
{
    protected $typeAttribute;

    public function __construct(TypeAttributeRepository $repository){
        $this->typeAttribute = $repository;
    }

    public function index()
    {
        $typeAttributes = $this->typeAttribute->all();
        return view('panel.type_attribute.index', compact('typeAttributes'));
    }

    public function create()
    {
        return view('panel.type_attribute.create');
    }

    public function store(TypeAttributeRequest $request)
    {
        $this->typeAttribute->store($request->all());
        return redirect()->route('panel.type-attribute.index');
    }

    public function show($id)
    {
        $typeAttribute = $this->typeAttribute->find($id);
        return view('panel.type_attribute.show', compact('typeAttribute'));
    }

    public function edit($id)
    {
        $typeAttribute = $this->typeAttribute->find($id);
        return view('panel.type_attribute.edit', compact('typeAttribute'));
    }

    public function update($id, TypeAttributeRequest $request)
    {
        $this->typeAttribute->update($id, $request->all());
        return redirect()->route('panel.type-attribute.index');
    }

    public function destroy($id)
    {
        $this->typeAttribute->delete($id);
        return redirect()->route('panel.type-attribute.index');
    }
}

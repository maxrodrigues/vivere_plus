<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\AttributeRequest;
use App\Models\Attribute;
use App\Repositories\AttributeRepository;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    protected $attribute;

    public function __construct(AttributeRepository $repository)
    {
        $this->attribute = $repository;
    }

    public function index()
    {
        $attributes = $this->attribute->all();
        return view('panel.attribute.index', compact('attributes'));
    }

    public function create()
    {
        $typeAttributes = $this->attribute->types();
        return view('panel.attribute.create', compact('typeAttributes'));
    }

    public function store(AttributeRequest $request) {
        $this->attribute->store($request->all());
        return redirect()->route('panel.attribute.index');
    }

    public function show($id)
    {
        $attribute = $this->attribute->find($id);
        $typeAttributes = $this->attribute->types();
        return view('panel.attribute.show', compact('attribute', 'typeAttributes'));
    }

    public function edit($id)
    {
        $attribute = $this->attribute->find($id);
        $typeAttributes = $this->attribute->types();
        return view('panel.attribute.edit', compact('attribute', 'typeAttributes'));

    }

    public function update($id, AttributeRequest $request)
    {
        $this->attribute->update($id, $request->all());
        return redirect()->route('panel.attribute.index');
    }

    public function destroy($id)
    {
        $this->attribute->delete($id);
        return redirect()->route('panel.attribute.index');
    }
}

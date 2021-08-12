<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\PropertyRequest;
use App\Repositories\PropertyRepository;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    protected $property;

    public function __construct(PropertyRepository $repository){
        $this->property = $repository;
    }

    public function index()
    {
        $properties = $this->property->all();
        return view('panel.property.index', compact('properties'));
    }

    public function create()
    {
        return view('panel.property.create');
    }

    public function store(PropertyRequest $request)
    {
        dd($request);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

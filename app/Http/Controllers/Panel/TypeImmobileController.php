<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\TypeImmobileRequest;
use App\Repositories\TypeImmobileRepository;
use Illuminate\Http\Request;

class TypeImmobileController extends Controller
{
    protected $typeImmobile;

    public function __construct(TypeImmobileRepository $typeImmobile)
    {
        $this->typeImmobile = $typeImmobile;
    }

    public function index()
    {
        $typeImmobiles = $this->typeImmobile->all();
        return view('panel.type_immobile.index', compact('typeImmobiles'));
    }

    public function create()
    {
        return view('panel.type_immobile.create');
    }

    public function store(TypeImmobileRequest $request)
    {
        $this->typeImmobile->store($request->all());
        return redirect()->route('panel.type-immobile.index');
    }

    public function show($id)
    {
        $typeImmobile = $this->typeImmobile->find($id);
        return view('panel.type_immobile.show', compact('typeImmobile'));
    }

    public function edit($id)
    {
        $typeImmobile = $this->typeImmobile->find($id);
        return view('panel.type_immobile.edit', compact('typeImmobile'));
    }

    public function update($id, TypeImmobileRequest $request)
    {
        $this->typeImmobile->update($id, $request->all());
        return redirect()->route('panel.type-immobile.index');
    }

    public function destroy($id)
    {
        $this->typeImmobile->delete($id);
        return redirect()->route('panel.type-immobile.index');
    }
}

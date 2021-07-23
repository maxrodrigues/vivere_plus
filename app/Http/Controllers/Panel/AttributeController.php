<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
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
    }

    public function show()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}

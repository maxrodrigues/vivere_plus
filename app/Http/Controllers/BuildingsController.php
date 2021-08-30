<?php

namespace App\Http\Controllers;

use App\Repositories\PropertyRepository;
use Illuminate\Http\Request;

class BuildingsController extends Controller
{
    protected $property;
    public function __construct(PropertyRepository $repository){
        $this->property = $repository;
    }

    public function index() {
        $properties = $this->property->all();
        return view('site.building', compact('properties'));
    }

    public function details(Request $request) {
        return view('site.building-details');
    }
}

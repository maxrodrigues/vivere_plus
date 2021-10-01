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
        return view('site.buildings', compact('properties'));
    }

    public function details($slug) {
        $property = $this->property->findBySlug($slug);
        $images = $property->images;
        $imageHeaderBackground = $property->images->where('is_main', true)->first()->url;

        return view('site.buildings-detail', compact('property', 'images', 'imageHeaderBackground'));
    }
}

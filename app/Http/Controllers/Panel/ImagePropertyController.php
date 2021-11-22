<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Repositories\ImagePropertyRepository;
use App\Repositories\ImageRepository;
use App\Repositories\PropertyRepository;
use Illuminate\Http\Request;

class ImagePropertyController extends Controller
{
    protected $property, $imageProperty;
    public function __construct(PropertyRepository $property, ImagePropertyRepository $imageProperty)
    {
        $this->property = $property;
        $this->imageProperty = $imageProperty;
    }

    public function index($propertyId)
    {
        $images = $this->imageProperty->all($propertyId);
        return view('panel.property.image.index', compact('propertyId', 'images'));
    }

    public function create($propertyId)
    {
        return view('panel.property.image.create', compact('propertyId'));
    }

    public function store($propertyId, Request $request, ImageRepository $image)
    {
        $property = $this->property->find($propertyId);

        foreach ($request->file('image_property') as $item) {
            $attributes['url'] = $image->saveImage(
                $item,
                $property->id,
                $property->slug,
                $this->imageProperty->countPropertyImages($propertyId)
            );

            $this->property->storeImage($propertyId, $attributes);
        }

        return redirect()->route('panel.property-images.index', ['property' => $propertyId]);
    }

    public function setMain($id)
    {
        $this->imageProperty->setMain($id);
        return redirect()->back();
    }

    public function setAlt($id)
    {
        $alt = "";
        dd('vem nenem');
        $this->imageProperty->setAlt($id, $alt);
    }
}

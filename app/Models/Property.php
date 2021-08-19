<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'type_immobile_id', 'name', 'bedrooms', 'bathrooms', 'suites', 'garage', 'area', 'approximate_area', 'price',
        'condominium', 'tax', 'description', 'zipcode', 'street', 'number', 'city', 'state', 'neighborhood'
    ];

    /** RELATIONS ========================= */
    public function typeImmobile()
    {
        return $this->belongsTo(TypeImmobile::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'attribute_property', 'property_id', 'attributes_id');
    }
}

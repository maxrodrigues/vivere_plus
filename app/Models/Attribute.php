<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = ['name', 'status', 'is_filter', 'type_attributes_id'];

    /** RELATIONS ================================================================= */

    public function type()
    {
        return $this->belongsTo(TypeAttributes::class, 'type_attributes_id');
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'attribute_property', 'attributes_id', 'property_id', 'attributes_id', 'property_id');
    }
}

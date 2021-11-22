<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageProperty extends Model
{
    protected $fillable = ['url', 'alt'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeImmobile extends Model
{
    protected $fillable = [
        'name', 'status'
    ];

    /** RELATIONS ========================= */
    public function properties() {
        return $this->hasMany(Property::class);
    }

}

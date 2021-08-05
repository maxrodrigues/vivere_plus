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
        return $this->BelongsTo(TypeAttributes::class, 'type_attributes_id');
    }
}

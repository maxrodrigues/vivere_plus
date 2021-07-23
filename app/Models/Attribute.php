<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = ['name', 'status', 'is_filter'];

    /** RELATIONS ================================================================= */

    public function type()
    {
        return $this->BelongsTo(TypeAttribute::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAttributes extends Model
{
    protected $fillable = ['name'];

    /** RELATIONS ================================================================= */

    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }
}

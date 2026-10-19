<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commodity extends Model
{
    protected $fillable = [
        'name',
        'category',
        'unit',
        'description',
    ];

    public function prices(): HasMany
    {
        return $this->hasMany(Price::class);
    }
}
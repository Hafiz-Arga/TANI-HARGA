<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Price extends Model
{
    protected $fillable = [
        'commodity_id',
        'market_id',
        'price_date',
        'price',
        'source',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'price_date' => 'date',
            'price' => 'decimal:2',
        ];
    }

    public function commodity(): BelongsTo
    {
        return $this->belongsTo(Commodity::class);
    }

    public function market(): BelongsTo
    {
        return $this->belongsTo(Market::class);
    }
}
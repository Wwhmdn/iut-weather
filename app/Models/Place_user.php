<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;

class PlaceUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'place_id',
        'user_id',
        'is_favorite',
        'send_forecast',
    ];

    protected function casts(): array
    {
        return [
            'is_favorite' => 'boolean',
            'send_forecast' => 'boolean',
        ];
    }
}
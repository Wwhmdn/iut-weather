<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Place extends Model
{
    use HasFactory;

    protected $table = 'place_user';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',
        'latitude',
        'longitude',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->withPivot('send_forecast', 'is_favorite')
            ->withTimestamps();
    }
}
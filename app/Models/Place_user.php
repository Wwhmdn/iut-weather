<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;

#[Table(timestamps: false)]
class Place_user extends Model
{
    //
    /**
     * Les attributs qui peuvent être assignés en masse.
     *
     * // var array c'est pour dire que c'est un tableau à VSCode 
     * @var array
     */


    protected $fillable = [
        'place_id',
        'user_id',
        'is_favorite',
        'send_forecast',
    ];

}

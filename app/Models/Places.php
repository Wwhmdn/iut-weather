<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;

#[Table('places')]
class Places extends Model
{
    //
    /**
     * Les attributs qui peuvent être assignés en masse.
     *
     * // var array c'est pour dire que c'est un tableau à VSCode 
     * @var array
     */


    //fillable = protéger contre l'assignation de masse, donc on met les champs qu'on veut protéger pour pas que l'utilisateur puisse les modifier
        protected $fillable = [
        'name',
        'slug',
        'latitude',
        'longitude',
    ];
}

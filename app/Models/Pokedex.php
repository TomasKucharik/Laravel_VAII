<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table ='pokedexes';
    protected $fillable = [
        'name',
        'image',
        'description',
        'trainer',

    ];

}

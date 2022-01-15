<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadion extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table ='stadions';
    protected $fillable = [
        'name',
        'image',
        'description',
        'trainer',

    ];

}

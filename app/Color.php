<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    protected $fillable = [
        'colorDeFondo', 'imagenDeFondo',
    ];
}

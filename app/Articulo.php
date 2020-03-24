<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = [
    'Meta_Descripcion', 
    'Meta_Keywords',
    'Titulo',
    'Descripcion',
    'Contenido1'
    ];
}

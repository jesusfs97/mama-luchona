<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Articulo extends Model
{   
    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
    public function getRouteKeyName(){
        return 'URL';
    }
    
    protected $fillable = [
    'Meta_Descripcion', 
    'Meta_Keywords',
    'UrlImagen',
    'Titulo',
    'Contenido1',
    'URL',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    public function scopeActivo($query){
        return $query->where('estado','activo');
    }

    public function scopeInactivo($query){
        return $query->where('estado','inactivo');
    }
}

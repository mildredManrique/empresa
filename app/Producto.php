<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
       'id_material', 'descripcion', 'unidad_medida', 'precio_1'
    
  
    ];

    // protected $maps = [
    //     'id'=> 'id_material'
    // ];
    // protected $primaryKey = 'id_material';
}  

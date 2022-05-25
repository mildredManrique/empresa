<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'monto', 'descripcion', 'user_id'   
     ];

     public function user(){
         return $this->belongsTo('App\User');
     }
}

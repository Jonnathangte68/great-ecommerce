<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagenproducto extends Model
{
    protected $table = "imagenproducto";

    protected $fillable = [
        'ruta',
    ];

    public function product(){
    	return $this->belongsTo('App\Product');
    }
}

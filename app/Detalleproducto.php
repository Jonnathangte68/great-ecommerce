<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalleproducto extends Model
{
    protected $table = "detalleproducto";

    protected $fillable = [
        'texto',
    ];

    public function product() {
    	return $this->belongsTo('App\Product');
    }
}

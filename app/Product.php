<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'name',
        'price',
        'description'
    ];

    public function Subcategories(){
        return $this->belongsToMany('App\Subcategory')->using('App\SubcategoryProduct');
    }

    public function imagenproductos() {
    	return $this->hasMany('App\Imagenproducto');
    }

    public function detalleproductos() {
    	return $this->hasMany('App\Detalleproducto');
    }    
}

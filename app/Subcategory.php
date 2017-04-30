<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = "subcategories";

    protected $fillable = [
        'title',
        'description',
        'image',
        'category_id'
    ];

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function Products(){
        return $this->belongsToMany('App\Product')->using('App\SubcategoryProduct');
    }
}

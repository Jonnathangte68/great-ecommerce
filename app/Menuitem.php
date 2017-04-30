<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menuitem extends Model
{
    protected $table = "menuitem";

    protected $fillable = [
        'name', 'numberofitems'
    ];

    public function items() 
    {
    	return $this->hasMany('App\Item');
    }
}

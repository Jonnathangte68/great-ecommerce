<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $table = "item";

    protected $fillable = [
        'name', 'link',
    ];

    public function menuitem()
    {
    	return $this->belongsTo('App\Menuitem');
    }
}

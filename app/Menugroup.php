<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menugroup extends Model
{
    protected $table = "menugroup";

    protected $fillable = [
        'name',
    ];
}

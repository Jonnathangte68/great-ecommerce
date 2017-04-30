<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class SubcategoryProduct extends Pivot
{
    protected $table = "product_subcategory";

    protected $fillable = [
        'subcategory_id',
        'product_id'
    ];

}

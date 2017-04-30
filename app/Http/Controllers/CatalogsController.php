<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;

class CatalogsController extends Controller
{
	public function index() {
		//
	}
	
    public function showCategory($id) {
    	$subcategorias = Category::find($id)->subcategories;
    	
        return view('categorycatalog',[
    		'subcategorias' => $subcategorias
    	]);
    }

    public function showSubcategory($id) {
        $subcategory = Subcategory::find($id);
        $products = $subcategory->products;

        return view('productcatalog',[
            'subcategory'   => $subcategory,
            'products'      => $products
        ]);
    }
}

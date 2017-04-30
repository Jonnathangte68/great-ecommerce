<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menuitem;
use App\Models\Section;
use App\Product;

class PrincipalsController extends Controller
{
    public function index()
    {
    	//Aca debemos cargar toda la informacion que se enviara al menu de la vista CATEGORIAS y subcategorias
    	return view('welcome', ['menuitems' => Menuitem::all()]);
    }

    public function newSection()
    {

    	// Carga de las secciones que se mostraran en la pagina principal
    	$arrayofsections = array();
    	foreach (Section::all() as $section) {
    		if ($section->showstatus == 'activo') {
    			$arrayofsections[] = $section;
    		}
    	}


    	return view('welcome2', [
    		'menuitems'		=>		Menuitem::all(),
    		'sections'  	=>		$arrayofsections, 
    	]);
    }

    public function buscar(Request $request){
        dd('buscar activado');
    }

    public function showProduct($id) {
        return view('product', [
            'producto'  => Product::find($id),
            'menuitems' => Menuitem::all()
        ]);
    }
}




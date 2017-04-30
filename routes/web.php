<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PrincipalsController@newSection');

Route::post('principal/buscar', [
    'as' => 'principal.buscar', 
    'uses' => 'PrincipalsController@buscar'
]);

Route::get('/showCategory/{id}', 'CatalogsController@showCategory');

Route::get('/showSubcategory/{id}', 'CatalogsController@showSubcategory');

Route::get('/show-product/{id}', 'PrincipalsController@showProduct');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('sections', 'SectionController');
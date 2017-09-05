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

//Route::get('/', 'PageController');
//Route::get('/color-palette', 'ColorPaletteController');

/**
 * Themes
 */
Route::get('/', 'IndexController');
Route::get('/billomat', 'BillomatController');

/**
 * Demo
 */
Route::group(['prefix' => 'demo'], function ()
{
	/**
	 * Api
	 */
	Route::get('/api', 'Demo\Api');
	Route::get('/api/ajax', 'Demo\Api@ajax');
});

Route::get('/{id}', 'PageController');

//Route::get('/new-age', function ()
//{
//	return view('theme/new-age/index');
//});
//
//Route::get('/agency', function ()
//{
//	return view('theme/agency/index');
//});
//
///**
// * Default for everything else
// */
//Route::get('/{page}', 'PageController');
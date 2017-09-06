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
	 * Api Integration
	 */
	Route::get('/api-integration', 'Demo\ApiIntegration');
	Route::get('/api-integration/sample', 'Demo\ApiIntegration@sample');
	Route::post('/api-integration/ajax_get_request', 'Demo\ApiIntegration@ajax_get_request');

	/**
	 * Stripe
	 */
	Route::get('/stripe', 'Demo\Stripe');
	Route::post('/stripe/authorise', 'Demo\Stripe@checkoutAuthorise');
});

Route::get('/new-age', function ()
{
	return view('theme/new-age/index');
});

//Route::get('/agency', function ()
//{
//	return view('theme/agency/index');
//});
//
///**
// * Default for everything else
// */
//Route::get('/{page}', 'PageController');
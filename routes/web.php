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



/**
 * Main
 */
Route::get('/', 'Index');
Route::get('/contact', 'Contact');
Route::get('/portfolio', 'Portfolio');

/**
 * Demo
 */
Route::group(['prefix' => 'portfolio'], function ()
{
	/**
	 * Api Integration
	 */
	Route::get('/api-integration', 'Demo\ApiIntegration');
	Route::post('/api-integration/ajax_get_request', 'Demo\ApiIntegration@ajax_get_request');

	/**
	 * Stripe
	 */
	Route::get('/stripe', 'Demo\Stripe');
	Route::post('/stripe/authorise', 'Demo\Stripe@checkoutAuthorise');

	/**
	 *
	 */
	Route::get('/marco-verch', 'Portfolio\MarcoVerch');
});

/**
 * Theme
 */
Route::group(['prefix' => 't'], function ()
{
	Route::get('/new-age', function ()
	{
		return view('theme/new-age/index');
	});

	Route::get('/unify-consulting', function ()
	{
		return view('theme/unify-consulting/index');
	});
});
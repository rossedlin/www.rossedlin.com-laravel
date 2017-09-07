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
Route::get('/', 'IndexController');
Route::get('/contact', 'IndexController');

/**
 * Demo
 */
Route::group(['prefix' => 'demo'], function ()
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
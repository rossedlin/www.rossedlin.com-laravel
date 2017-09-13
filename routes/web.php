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
Route::get('/about', 'About');
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
	Route::get('/api-integration', 'Portfolio\ApiIntegration');

	/**
	 * Stripe
	 */
	Route::get('/stripe', 'Demo\Stripe');
	Route::post('/stripe/authorise', 'Demo\Stripe@checkoutAuthorise');

	/**
	 *
	 */
	Route::get('/marco-verch', 'Portfolio\MarcoVerch');

	/**
	 * Web Scraping
	 */
	Route::get('/web-scraping', 'Portfolio\WebScraping');

	/**
	 * FiveGuys
	 */
	Route::get('/fiveguys', 'Portfolio\FiveGuys');

	/**
	 * Cryslo
	 */
	Route::get('/cryslo', 'Portfolio\Cryslo');

	/**
	 * GoodEarth
	 */
	Route::get('/goodearth', 'Portfolio\GoodEarth');

	/**
	 * DishdashNoqu
	 */
	Route::get('/dishdash-noqu', 'Portfolio\DishdashNoqu');

	/**
	 * RossEdlinLanding
	 */
	Route::get('/ross-edlin-landing', 'Portfolio\RossEdlinLanding');
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
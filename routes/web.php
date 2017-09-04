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

Route::get('/', 'PageController');
Route::get('/color-palette', 'ColorPaletteController');
Route::get('/{page}', 'PageController');

/**
 * Themes
 */

Route::get('/new-age', function ()
{
	return view('theme/new-age/index');
});

Route::get('/agency', function ()
{
	return view('theme/agency/index');
});
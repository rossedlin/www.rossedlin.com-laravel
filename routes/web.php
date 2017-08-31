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

Route::get('/', function ()
{
	return view('index');
});

Route::get('/new-age', function ()
{
	return view('theme/new-age/index');
});

Route::get('/agency', function ()
{
	return view('theme/agency/index');
});

Route::get('/unify', function ()
{
	return view('theme/unify/demo/home/page-1');
});
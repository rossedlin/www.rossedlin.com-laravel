<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/contact', 'Contact@api');

/**
 * Demo
 */
Route::group(['prefix' => 'portfolio'], function ()
{
    /**
     * Api Integration
     */
    Route::post('/api-integration/get-request', 'Portfolio\ApiIntegration@apiGetRequest');

    /**
     * Stripe
     */
    Route::get('/stripe/authorise', 'Demo\Stripe@ApiAuthorise');

    /**
     * Marco Verch
     */
    Route::post('/marco-verch/mark-invoice-complete', 'Portfolio\MarcoVerch@ajaxMarkInvoiceComplete');
    Route::post('/marco-verch/send-invoice', 'Portfolio\MarcoVerch@ajaxSendInvoice');

    /**
     * Web Scraping
     */
    Route::post('/web-scraping/google/search', 'Portfolio\WebScraping@apiGoogleSearch');
});
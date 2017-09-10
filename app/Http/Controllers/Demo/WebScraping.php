<?php
namespace App\Http\Controllers\Demo;

use \App\Http\Controllers;
use \App\Objects;
use \Cryslo\Core;
use \Cryslo\Api;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 07/09/2017
 * Time: 23:39
 *
 * Class PageController
 * @package App\Http\Controllers
 */
class WebScraping extends Controllers\_Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		return view('pages/demo/web-scraping', $this->data);
	}
}
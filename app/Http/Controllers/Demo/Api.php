<?php
namespace App\Http\Controllers\Demo;

use \App\Http\Controllers;
use \App\Objects;
use \Cryslo\Core;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 05/09/2017
 * Time: 14:28
 *
 * Class PageController
 * @package App\Http\Controllers
 */
class Api extends Controllers\_Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		App::environment();
		return view('pages/demo/api', $this->data);
	}

	/**
	 *
	 */
	public function ajax()
	{
		pre("ajax");
	}
}
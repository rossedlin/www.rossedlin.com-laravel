<?php
namespace App\Http\Controllers\Portfolio;

use \App\Http\Controllers;
use \App\Objects;
use \Cryslo\Core;
use \Cryslo\Api;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 13/09/2017
 * Time: 15:52
 *
 * Class FiveGuys
 *
 * @package App\Http\Controllers\Portfolio
 */
class FiveGuys extends Controllers\_Web
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		return view('coming-soon', $this->data);
	}
}
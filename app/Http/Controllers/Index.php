<?php
namespace App\Http\Controllers;

use \App\Objects;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 04/09/2017
 * Time: 15:54
 *
 * Class PageController
 * @package App\Http\Controllers
 */
class Index extends _Web
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		return view('coming-soon', $this->data);
	}
}
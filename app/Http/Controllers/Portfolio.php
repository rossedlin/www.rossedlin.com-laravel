<?php
namespace App\Http\Controllers;

use \App\Objects;

/**
 * Created by PhpStorm.
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 09/09/2017
 * Time: 16:12
 *
 * Class Portfolio
 * @package App\Http\Controllers
 */
class Portfolio extends _Controller
{
	/**
	 * @param $id
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke($id = 'index')
	{
		return view('coming-soon', $this->data);
	}
}
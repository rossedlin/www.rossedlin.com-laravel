<?php
namespace App\Http\Controllers;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 13/09/2017
 * Time: 15:09
 *
 * Class Portfolio
 * @package App\Http\Controllers
 */
class About extends _Web
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		return view('about', $this->data);
	}
}
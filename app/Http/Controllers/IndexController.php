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
class IndexController extends _Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		return view('theme/unify-agency/index', $this->data);
	}
}
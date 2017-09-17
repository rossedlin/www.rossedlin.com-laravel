<?php
namespace App\Http\Controllers;

use App\Library\WordPress;
use \App\Objects;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 16/09/2017
 * Time: 22:25
 *
 * Class PageController
 * @package App\Http\Controllers
 */
class Blog extends _Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{

		return view('blog', $this->data);
	}

	/**
	 * @param string $date
	 * @param string $slug
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 *
	 * @throws \Exception
	 */
	public function post($date, $slug)
	{
		$this->data['post'] = WordPress\Api::getPost($slug);

		return view('blog/post', $this->data);
	}
}
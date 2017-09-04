<?php
namespace App\Http\Controllers;

use CuttingWeb\Core\Feed;
use \App\Objects;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 01/09/2017
 * Time: 11:19
 *
 * Class PageController
 * @package App\Http\Controllers
 */
class PageController extends _Controller
{
	/**
	 * @param $id
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke($id = 'index')
	{
		$this->data['id'] = $id;

		switch ($id)
		{
			case 'index':
				return view('index', $this->data);

			case 'portfolio':
				return view('portfolio', $this->data);

			case 'colour-palette':
				return view('colour-palette', $this->data);

			case 'about':
				return view('about', $this->data);

			case 'contact':
				return view('contact', $this->data);
		}

		abort(404);
		exit;
	}
}
<?php
namespace App\Http\Controllers;

use \App\Objects;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 03/09/2017
 * Time: 12:28
 *
 * Class PageController
 * @package App\Http\Controllers
 */
class ColorPaletteController extends _Controller
{
	/**
	 * @param $id
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke($id = 'index')
	{
		$a = new Objects\ColorPalette\Item([
			'#ffffff',
			'#8d8741',
		]);

		$this->data['id'] = $id;
		$this->data['colorPalette'] = [
			$a
		];

		return view('colour-palette', $this->data);
	}
}
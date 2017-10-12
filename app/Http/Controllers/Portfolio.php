<?php
namespace App\Http\Controllers;

use \App\Objects;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 09/09/2017
 * Time: 16:12
 *
 * Class Portfolio
 * @package App\Http\Controllers
 */
class Portfolio extends _Web
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		$portfolio = new \App\Library\Portfolio();

		$this->data['portfolio'] = [
			$portfolio->getWebScraping(),
			$portfolio->getFiveGuys(),
			$portfolio->getApiIntegration(),
			$portfolio->getCryslo(),
			$portfolio->getStripe(),
			$portfolio->getRossEdlinLanding(),
			$portfolio->getDishdashNoqu(),
			$portfolio->getGoodEarth(),
		];

		return view('portfolio', $this->data);
	}
}
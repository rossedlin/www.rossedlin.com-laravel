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
		$this->data['portfolio'] = [
			new Objects\Portfolio\Item('Web Scraping', '11th September 2017', 'A demo piece to show off web scraping google.', url('/portfolio/web-scraping'), url('/img/portfolio/web-scraping/web-scraping-275x122.jpg')),
			new Objects\Portfolio\Item('FiveGuys', 'June 2016', 'An online ordering site for a major burger chain in the UK, Powered by NOQU a highly customisable platform.', url('/portfolio/fiveguys'), url('/img/portfolio/fiveguys/fiveguys-homepage-275x122.jpg')),
			new Objects\Portfolio\Item('Api Integration', '6th September 2017', 'A demo piece to show off an api integration, GETing records from an API.', url('/portfolio/api-integration'), url('/img/portfolio/api-integration/api-integration-275x122.jpg')),
			new Objects\Portfolio\Item('Cryslo', '12th June 2013', 'A Minecraft website designed to be simplistic in nature showcasing the beauty you can create from the game.', url('/portfolio/cryslo'), url('/img/portfolio/cryslo/cryslo-400x270.jpg')),
		];

		return view('portfolio', $this->data);
	}
}
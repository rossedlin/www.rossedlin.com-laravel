<?php
namespace App\Http\Controllers\Portfolio;

use \App\Http\Controllers;
use \App\Objects;
use \Cryslo\Core;
use \Cryslo\WebScraper;
use \Cryslo\Api;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 07/09/2017
 * Time: 23:39
 *
 * Class PageController
 *
 * @package App\Http\Controllers
 */
class WebScraping extends Controllers\_Web
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		return view('portfolio/web-scraping', $this->data);
	}

	/**
	 * @throws \Exception
	 */
	public function apiGoogleSearch()
	{
		$searchValue = Core\Request::post('search_value', 'Ross+Edlin');
		$subUrl      = '/search?q=' . WebScraper\Google\Search::searchify($searchValue);

		$scraper            = new WebScraper\Google\Search();
		$this->data['url']  = 'https://www.google.co.uk' . $subUrl;
		$this->data['rows'] = $scraper->scrap('https://www.google.co.uk/', [
			'subUrl' => $subUrl,
		]);

		return view('portfolio/web-scraping/google/search/table', $this->data);
	}
}
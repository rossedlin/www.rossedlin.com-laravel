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
class PageController extends Controller
{
	/**
	 * @var Feed\Object\Wordpress $wordpress
	 */
	private $wordpress;

	/**
	 * @var Objects\Page $page
	 */
	private $page;

	/**
	 * @var array $data
	 */
	private $data;

	/**
	 * PageController constructor.
	 */
	public function __construct()
	{
		$feed            = new Feed\Wordpress();
		$this->wordpress = $feed->getFromUrl("https://wordpress.cuttingweb.co.uk/feed/");

		$this->page = new Objects\Page([
			'title' => $this->wordpress->getTitle(),
		]);

		$this->data = [
			'page' => $this->page,
		];
	}

	/**
	 * @param $id
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke($id = 'index')
	{
		switch ($id)
		{
			case 'index':
				return view('index', $this->data);

			case 'portfolio':
				return view('portfolio', $this->data);

			case 'about':
				return view('about', $this->data);

			case 'contact':
				return view('contact', $this->data);

			case 'feed':
				return $this->feed();
		}

		abort(404);
		exit;
	}

	/**
	 *
	 */
	private function feed()
	{
		pre($this->wordpress->getTitle());
		pre($this->wordpress->getLink());
		pre($this->wordpress);
	}
}
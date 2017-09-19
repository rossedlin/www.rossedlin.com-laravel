<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Cache;

use App\Library\WordPress;

use Cryslo\Api;
use Cryslo\Object;
use Cryslo\Core\Utils;
use \App\Objects;

/**
 * Class _Web
 *
 * @package App\Http\Controllers
 */
abstract class _Web extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	/**
	 * Redis Keys
	 */
	const WORDPRESS_CACHE = 'feed-wordpress';
	const WORDPRESS_URL   = 'https://wordpress.rossedlin.com';
	const WORDPRESS_DATE  = 'jS M Y';

	/**
	 * @var Objects\Page $page
	 */
	protected $page;

	/**
	 * @var array $data
	 */
	protected $data = [];

	/**
	 * PageController constructor.
	 */
	public function __construct()
	{
//        $feed            = new Feed\Wordpress();
//        $wordpress = $feed->getFromUrl("https://wordpress.cuttingweb.co.uk/feed/");

		$this->page = new Objects\Page([
//            'title' => $wordpress->getTitle(),
		]);

		$this->data = [
			'page'         => $this->page,
			'latest_posts' => WordPress\Api::getLatestPosts(),
		];
	}
}

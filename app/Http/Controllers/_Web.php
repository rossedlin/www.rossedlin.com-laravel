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
	 * @var Objects\Web\Meta $meta
	 */
	protected $meta;

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

		$this->meta = new Objects\Web\Meta();
		$this->meta->setTitle("Ross Edlin");
		$this->meta->setSiteName("Ross Edlin");
		$this->meta->setDescription("Follow Ross Edlin's blog, talking about new technology, travel, photography.");
		$this->meta->setKeywords('ross edlin, ross, edlin, technology, travel, photography');
		$this->meta->setUrl(url('/'));

		$this->page = new Objects\Page([
//            'title' => $wordpress->getTitle(),
		]);

		$this->data = [
			'meta'         => $this->meta,
			'page'         => $this->page,
			'latest_posts' => WordPress\Api::getLatestPosts(),
		];
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Cache;

use Cryslo\Api;
use Cryslo\Object;
use \App\Objects;

abstract class _Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	/**
	 * Redis Keys
	 */
	const CACHE_WORDPRESS = 'feed-wordpress';

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
			'latest_posts' => $this->getLatestPosts(),
		];
	}

	/**
	 * @return Object\WordPress\Item[]
	 */
	public function getLatestPosts()
	{
		try
		{
			$items = Cache::get(self::CACHE_WORDPRESS, false);

			if (!$items)
			{
				$feed = new Api\WordPress();
				$feed->setUrl("https://wordpress.rossedlin.com/category/general/feed/");

				$items = $feed->getFeed()->getChannel()->getItems();

				Cache::put(self::CACHE_WORDPRESS, $items, 60);
			}

			return $items;
		}
		catch (\Exception $e)
		{
			return [];
		}
	}
}

<?php

namespace App\Http\Controllers;

use Cryslo\Core\Utils;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Cache;

use Cryslo\Api;
use Cryslo\Object;
use \App\Objects;

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
			'latest_posts' => $this->getLatestPosts(),
		];
	}

	/**
	 * @return Object\WordPress\Item[]
	 */
	public function getLatestPosts()
	{
		return [];
		try
		{
			$items = false;
//			$items = Cache::get(self::CACHE_WORDPRESS, false);

			if (!$items)
			{
				$feed = new Api\WordPress();
				$feed->setUrl(self::WORDPRESS_URL . "/category/general/feed/");

				$items = $feed->getFeed()->getChannel()->getItems();

				foreach ($items as $key => &$item)
				{
					/**
					 * Strip old URL
					 */
					if (Utils::startsWith($item->getLink(), self::WORDPRESS_URL))
					{
						$item->setLink(substr($item->getLink(), 31, strlen($item->getLink()) - 31));
					}
					else
					{
						unset($items[$key]);
						continue;
					}

					/**
					 * Reformat Date
					 */

					$item->setPublishDate(date(self::WORDPRESS_DATE, strtotime($item->getPublishDate())));
				}

				Cache::put(self::WORDPRESS_CACHE, $items, 60);
			}

			return $items;
		}
		catch (\Exception $e)
		{
			return [];
		}
	}
}

<?php
namespace App\Library\WordPress;

use Cryslo\Api\WordPress;
use Cryslo\Object;
use App\Objects;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 17/09/2017
 * Time: 12:35
 *
 * Class Feed
 *
 * @package App\Library\WordPress
 */
class Api
{
	public function __construct()
	{
		$url = trim();
		$url = rtrim($url, '/');

		return $url;
	}

	/**
	 * @param string $id
	 *
	 * @return Object\WordPress\Posts
	 * @throws \Exception
	 */
	public static function query(string $id)
	{
		try
		{
//			return WordPress::query(self::_getUrl() . "/wp-json");
		}
		catch (\Exception $e)
		{
			throw $e;
		}
	}

	/**
	 * @param string $slug
	 *
	 * @return Object\WordPress\Post
	 *
	 * @throws \Exception
	 */
	public static function getPost($slug)
	{
		try
		{
			return WordPress::getPost(env('WORDPRESS_URL') . WordPress\Url::getPostsBySlug($slug));
		}
		catch (\Exception $e)
		{
			throw $e;
		}

		exit;
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
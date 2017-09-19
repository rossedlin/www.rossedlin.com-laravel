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
	}

	/**
	 * @param string $slug
	 *
	 * @return Object\WordPress\Post
	 *
	 * @throws \Exception
	 */
	public static function getLatestPosts()
	{
		try
		{
			return WordPress::getPosts(env('WORDPRESS_URL') . WordPress\Url::getLatestPosts(['per_page' => 3]));
		}
		catch (\Exception $e)
		{
			throw $e;
		}
	}
}
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
			$post = WordPress::getPost(env('WORDPRESS_URL') . WordPress\Url::getPostBySlug($slug));

			/**
			 * Apply styling to tags
			 */
			$tags = $post->getTags();
			$post->setTags(self::applyTagsCssClass($tags));

			return $post;
		}
		catch (\Exception $e)
		{
			throw $e;
		}
	}

	/**
	 * @return Object\WordPress\Post[]
	 *
	 * @throws \Exception
	 */
	public static function getLatestPosts()
	{
		try
		{
			return WordPress::getPosts(env('WORDPRESS_URL') . WordPress\Url::getPosts(['per_page' => 3]));
		}
		catch (\Exception $e)
		{
//			throw $e; //todo
		}

		return [];
	}

	/**
	 * @param $args
	 *
	 * @return Object\WordPress\Post[]
	 *
	 * @throws \Exception
	 */
	public static function getPosts($args = [])
	{
		try
		{
			$posts = WordPress::getPosts(env('WORDPRESS_URL') . WordPress\Url::getPosts($args));

			foreach ($posts as $post)
			{
				/**
				 * Apply styling to tags
				 */
				$tags = $post->getTags();
				$post->setTags(self::applyTagsCssClass($tags));
			}

			return $posts;
		}
		catch (\Exception $e)
		{
//			throw $e; //todo
		}

		return [];
	}

	/**
	 * @param array $args
	 *
	 * @return Object\WordPress\Tag[]
	 * @throws \Exception
	 */
	public static function getTags($args = [])
	{
		try
		{
			$tags = WordPress::getTags(env('WORDPRESS_URL') . WordPress\Url::getTags($args));

			self::applyTagsCssClass($tags);

			return $tags;
		}
		catch (\Exception $e)
		{
//			throw $e; //todo
		}

		return [];
	}

	/**
	 * @param Object\WordPress\Tag $tag
	 *
	 * @return string
	 */
	public static function getTagCssClass(Object\WordPress\Tag $tag)
	{
		switch ($tag->getSlug())
		{
			case 'website':
				return 'g-color-yellow g-bg-yellow-opacity-0_1 g-bg-yellow--hover';

			case 'lineten':
				return 'g-color-lineten g-bg-lineten-opacity-0_1 g-bg-lineten--hover';

			default:
				return 'g-color-teal g-bg-teal-opacity-0_1 g-bg-teal--hover';
		}
	}

	/**
	 * @param Object\WordPress\Tag $tag
	 *
	 * @return Object\WordPress\Tag
	 */
	public static function applyTagCssClass(Object\WordPress\Tag &$tag)
	{
		$tag->setCssClass(self::getTagCssClass($tag));
		return $tag;
	}

	/**
	 * @param Object\WordPress\Tag[] $tags
	 *
	 * @return Object\WordPress\Tag[]
	 */
	public static function applyTagsCssClass(array &$tags)
	{
		foreach ($tags as &$tag)
		{
			self::applyTagCssClass($tag);
		}

		return $tags;
	}
}
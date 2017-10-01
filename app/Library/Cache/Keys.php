<?php
namespace App\Library\Cache;

/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 01/10/2017
 * Time: 15:51
 */

class Keys
{
	/**
	 * @return string
	 */
	public static function getWordpressTag()
	{
		return "wordpress.tags";
	}

	/**
	 * @param string $slug
	 *
	 * @return string
	 */
	public static function getWordpressPost(string $slug)
	{
		return "wordpress.post." . $slug;
	}

	/**
	 * @return string
	 */
	public static function getWordpressLatestPosts()
	{
		return "wordpress.posts.latest";
	}

	/**
	 * @param int $id
	 *
	 * @return string
	 */
	public static function getWordpressUser(int $id)
	{
		return "wordpress.user." . $id;
	}
}
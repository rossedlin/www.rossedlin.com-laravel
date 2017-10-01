<?php
namespace App\Library;

/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 01/10/2017
 * Time: 15:35
 */

class Cache
{
	const WORDPRESS_TAGS = "wordpress.tags";

	/**
	 * @param $key
	 *
	 * @return mixed
	 */
	public static function get(string $key)
	{
		return \Illuminate\Support\Facades\Cache::get($key);
	}

	/**
	 * @param string $key
	 * @param mixed $content
	 *
	 * @return mixed
	 */
	public static function set(string $key, $content)
	{
		if (\Illuminate\Support\Facades\Cache::store('file')->put($key, $content, 1))
		{
			return true;
		}

		return false;
	}
}
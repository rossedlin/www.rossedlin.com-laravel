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
	/**
	 * @param $key
	 *
	 * @return mixed
	 */
	public static function get(string $key)
	{
//		return false;
		return \Illuminate\Support\Facades\Cache::get($key);
	}

	/**
	 * @param string $key
	 * @param        $content
	 * @param int    $expiresAt - Minutes
	 *
	 * @return bool
	 */
	public static function set(string $key, $content, $expiresAt = 60)
	{
		if (\Illuminate\Support\Facades\Cache::store('file')->put($key, $content, $expiresAt))
		{
			return true;
		}

		return false;
	}
}
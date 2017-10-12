<?php
namespace App\Library;

/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 12/10/2017
 * Time: 13:55
 */

class About
{
	/**
	 * @return string
	 */
	public static function getFullName()
	{
		return "Ross Edlin";
	}

	/**
	 * @return string
	 */
	public static function getTitle()
	{
		return "Web Developer";
	}

	/**
	 * @return string
	 */
	public static function getLocation()
	{
		return "Chiang Mai, Thailand";
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public static function getDescription()
	{
		return view('snippets.about.description');
	}
}
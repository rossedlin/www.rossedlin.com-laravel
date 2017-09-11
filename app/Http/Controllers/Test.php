<?php
namespace App\Http\Controllers;

use \App\Objects;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 11/09/2017
 * Time: 17:45
 *
 * Class PageController
 * @package App\Http\Controllers
 */
class Test extends _Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		$string = 'abcdefghijklm';

		pre($this->reverseString1($string));
		pre($this->reverseString2($string));
	}

	/**
	 * @param $string
	 *
	 * @return mixed
	 */
	public function reverseString1($string)
	{
		for ($key = strlen($string) - 1, $start = 0; $start < $key; $key--, $start++)
		{
			list($string[$start], $string[$key]) = array($string[$key], $string[$start]);
		}

		return $string;
	}

	/**
	 * @param $string
	 *
	 * @return string
	 */
	public function reverseString2($string)
	{
		$new = "";

		for ($key = (int)strlen($string) - 1; $key >= 0; $key--)
		{
			$new .= substr($string, $key, 1);
		}

		return $new;
	}
}
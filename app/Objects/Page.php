<?php
namespace App\Objects;
use League\Flysystem\Config;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 01/09/2017
 * Time: 15:00
 *
 * Class Page
 * @package App\Objects
 */
class Page
{
	/** @var array $default */
	private static $default = [
		'title' => 'Cutting Web',
	];

	/** @var array $data */
	private $data;

	/**
	 * Page constructor.
	 *
	 * @param $data
	 */
	public function __construct($data = [])
	{
		$this->data = array_merge([
			'title' => config('site.title'),
		], $data);
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return (string)$this->data['title'];
	}
}
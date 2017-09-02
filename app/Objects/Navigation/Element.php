<?php
namespace App\Objects\Navigation;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 02/09/2017
 * Time: 19:27
 */
class Element
{
	/** @var string $name */
	private $name;

	/** @var string $subUrl */
	private $subUrl;


	/**
	 * Navigation
	 *
	 * @param string $name
	 * @param string $subUrl
	 */
	public function __construct($name, $subUrl)
	{
		$this->name   = (string)$name;
		$this->subUrl = (string)$subUrl;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getSubUrl()
	{
		return $this->subUrl;
	}
}
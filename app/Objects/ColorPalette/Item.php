<?php
namespace App\Objects\ColorPalette;
use CuttingWeb\Core\Utils;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 03/09/2017
 * Time: 12:40
 *
 * Class Element
 * @package App\Objects\ColorPalette
 */
class Item
{
	/** @var array $color */
	private $colors = [];

	/**
	 * Element constructor.
	 *
	 * @param array $colors
	 */
	public function __construct($colors = [])
	{
		foreach ($colors as $color)
		{
			$this->addColor($color);
		}
	}

	/**
	 * @return array
	 */
	public function getColors()
	{
		return $this->colors;
	}

	/**
	 * @param string $color
	 *
	 * @throws \Exception
	 */
	public function addColor($color)
	{
		if (!Utils::isCssColor((string)$color))
		{
			throw new \Exception('color not valid - '.$color);
		}

		$this->colors[] = $color;
	}
}
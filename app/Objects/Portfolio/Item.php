<?php
namespace App\Objects\Portfolio;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 12/09/2017
 * Time: 12:46
 *
 * Class Item
 *
 * @package App\Objects\Portfolio
 */
class Item
{
	/** @var string $date */
	private $date;

	/** @var string $excerpt */
	private $excerpt;

	/** @var string $title */
	private $title;

	/** @var string $link */
	private $link;

	/** @var string $image */
	private $image;

	/**
	 * Item constructor.
	 *
	 * @param string $title
	 * @param string $date
	 * @param string $excerpt
	 * @param string $link
	 */
	public function __construct($title, $date, $excerpt, $link, $image)
	{
		$this->title   = $title;
		$this->date    = $date;
		$this->excerpt = $excerpt;
		$this->link    = $link;
		$this->image    = $image;
	}

	/**
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * @param string $date
	 */
	public function setDate($date)
	{
		$this->date = (string)$date;
	}

	/**
	 * @return string
	 */
	public function getExcerpt()
	{
		return $this->excerpt;
	}

	/**
	 * @param string $excerpt
	 */
	public function setExcerpt($excerpt)
	{
		$this->excerpt = (string)$excerpt;
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title)
	{
		$this->title = (string)$title;
	}

	/**
	 * @return string
	 */
	public function getLink()
	{
		return $this->link;
	}

	/**
	 * @param string $link
	 */
	public function setLink($link)
	{
		$this->link = $link;
	}

	/**
	 * @return string
	 */
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * @param string $image
	 */
	public function setImage($image)
	{
		$this->image = $image;
	}
}
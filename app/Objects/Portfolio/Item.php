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

	/** @var string $image */
	private $image;

	/** @var string $link */
	private $link;

	/** @var bool $linkExternal */
	private $linkExternal;

	/** @var string $title */
	private $title;

	/**
	 * @return string
	 */
	public function getDate(): string
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
	public function getExcerpt(): string
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
	public function getImage(): string
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

	/**
	 * @return string
	 */
	public function getLink(): string
	{
		return $this->link;
	}

	/**
	 * @param string $link
	 * @param bool   $external
	 */
	public function setLink(string $link, bool $external = false)
	{
		$this->link         = (string)$link;
		$this->linkExternal = $external;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string
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
	 * @return bool
	 */
	public function isLinkExternal(): bool
	{
		return $this->linkExternal;
	}
}
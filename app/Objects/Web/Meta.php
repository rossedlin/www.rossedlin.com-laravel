<?php
namespace App\Objects\Web;

/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 12/10/2017
 * Time: 17:36
 *         
 * Class Meta
 *
 * @package App\Objects\Web
 */
class Meta
{
	/** @var string $description */
	private $description = '';

	/** @var string $keywords */
	private $keywords = '';

	/** @var string $locale */
	private $locale = 'en_GB';

	/** @var string $type */
	private $type = 'website';

	/** @var string $title */
	private $title = '';

	/** @var string $image */
	private $image = '';

	/** @var string $url */
	private $url = '';

	/** @var string $site_name */
	private $site_name = '';

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getKeywords()
	{
		return $this->keywords;
	}

	/**
	 * @param string $keywords
	 */
	public function setKeywords($keywords)
	{
		$this->keywords = $keywords;
	}

	/**
	 * @return string
	 */
	public function getLocale()
	{
		return $this->locale;
	}

	/**
	 * @param string $locale
	 */
	public function setLocale($locale)
	{
		$this->locale = $locale;
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 */
	public function setType($type)
	{
		$this->type = $type;
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
		$this->title = $title;
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

	/**
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * @param string $url
	 */
	public function setUrl($url)
	{
		$this->url = $url;
	}

	/**
	 * @return string
	 */
	public function getSiteName()
	{
		return $this->site_name;
	}

	/**
	 * @param string $site_name
	 */
	public function setSiteName($site_name)
	{
		$this->site_name = $site_name;
	}
}
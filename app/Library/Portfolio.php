<?php
namespace App\Library;

use \App\Objects;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 12/10/2017
 * Time: 12:53
 *
 * Class Portfolio
 *
 * @package App\Library
 */
class Portfolio
{
	/**
	 * @return int
	 */
	public static function getItemCount()
	{
		return 8;
	}

	/**
	 * @return Objects\Portfolio\Item
	 */
	public function getStripe()
	{
		$obj = new Objects\Portfolio\Item();
		$obj->setTitle('Stripe Payments');
		$obj->setDate('September 2017');
		$obj->setExcerpt('A payment provider integrated into the page, you can make fake payments with this.');
		$obj->setLink(url('/portfolio/stripe'));
		$obj->setImage(url('/img/portfolio/stripe/stripe-logo-450x200.jpg'));

		return $obj;
	}

	/**
	 * @return Objects\Portfolio\Item
	 */
	public function getGoodEarth()
	{
		$obj = new Objects\Portfolio\Item();
		$obj->setTitle('The GoodEarth');
		$obj->setDate('October 2015');
		$obj->setExcerpt('An online ordering website for a Chinese restaurant chain, capturing the essence of the of the GoodEarth brand and Powered by NOQU creating a seamless customer experience.');
		$obj->setLink("https://order.goodearthgroup.co.uk/", true);
		$obj->setImage(url('/img/portfolio/goodearth/goodearth-homepage-450x200.jpg'));

		return $obj;
	}

	/**
	 * @return Objects\Portfolio\Item
	 */
	public function getDishdashNoqu()
	{
		$obj = new Objects\Portfolio\Item();
		$obj->setTitle('Dishdash / NOQU');
		$obj->setDate('Feb 2016');
		$obj->setExcerpt('The main backend to a multitude of websites, including FiveGuys and GoodEarth, branded as Dishdash. I was a key developer at Lineten working in a small team to bring this to life, I worked in areas such as Payment, POS, handling the entire order process and Android development.');
//		$obj->setLink(url('/portfolio/dishdash-noqu'));
		$obj->setLink("https://dishdash.co.uk/", true);
		$obj->setImage(url('/img/portfolio/dishdash-noqu/dishdash-noqu-homepage-450x200.jpg'));

		return $obj;
	}

	/**
	 * @return Objects\Portfolio\Item
	 */
	public function getRossEdlinLanding()
	{
		$obj = new Objects\Portfolio\Item();
		$obj->setTitle('Ross Edlin (Landing)');
		$obj->setDate('August 2017');
		$obj->setExcerpt('A simple landing page to describe me in a few words and share my social media.');
		$obj->setLink("https://projects.rossedlin.com/landing-page.rossedlin.com/public/", true);
		$obj->setImage(url('/img/portfolio/ross-edlin-landing/ross-edlin-landing-homepage-450x200.jpg'));

		return $obj;
	}

	/**
	 * @return Objects\Portfolio\Item
	 */
	public function getApiIntegration()
	{
		$obj = new Objects\Portfolio\Item();
		$obj->setTitle('Api Integration');
		$obj->setDate('September 2017');
		$obj->setExcerpt('A demo piece to show off an api integration, GETing records from an API.');
		$obj->setLink(url('/portfolio/api-integration'));
		$obj->setImage(url('/img/portfolio/api-integration/api-integration-450x200.jpg'));

		return $obj;
	}

	/**
	 * @return Objects\Portfolio\Item
	 */
	public function getWebScraping()
	{
		$obj = new Objects\Portfolio\Item();
		$obj->setTitle('Web Scraping');
		$obj->setDate('September 2017');
		$obj->setExcerpt('A demo piece to show off web scraping google.');
		$obj->setLink(url('/portfolio/web-scraping'));
		$obj->setImage(url('/img/portfolio/web-scraping/web-scraping-450x200.jpg'));

		return $obj;
	}

	/**
	 * @return Objects\Portfolio\Item
	 */
	public function getFiveGuys()
	{
		$obj = new Objects\Portfolio\Item();
		$obj->setTitle('FiveGuys');
		$obj->setDate('June 2016');
		$obj->setExcerpt('An online ordering site for a major burger chain in the UK, Powered by NOQU a highly customisable platform.');
		$obj->setLink(url('/portfolio/fiveguys'));
		$obj->setLink("https://www.fiveguys.co.uk/start-order", true);
		$obj->setImage(url('/img/portfolio/fiveguys/fiveguys-homepage-450x200.jpg'));

		return $obj;
	}

	/**
	 * @return Objects\Portfolio\Item
	 */
	public function getCryslo()
	{
		$obj = new Objects\Portfolio\Item();
		$obj->setTitle('Cryslo');
		$obj->setDate('June 2013');
		$obj->setExcerpt('A Minecraft website designed to be simplistic in nature showcasing the beauty you can create from the game.');
		$obj->setLink("https://www.cryslo.com/", true);
		$obj->setImage(url('/img/portfolio/cryslo/cryslo-homepage-450x200.jpg'));

		return $obj;
	}
}
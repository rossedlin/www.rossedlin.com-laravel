<?php
namespace App\Http\Controllers\Portfolio;

use \App\Http\Controllers;
use \App\Objects;
use \Cryslo\Core;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 20/12/2016
 * Time: 17:35
 *
 * Class Stripe
 * @package App\Http\Controllers
 */
class Stripe extends Controllers\_Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		return view('portfolio/stripe', [
			'id'                 => self::getId(),
			'amount'             => self::getAmount(),
			'currency_code'      => self::getCurrencyCode(),
			'secret_key'         => self::getSecretKey(),
			'publish_key'        => self::getPublishKey(),
			'url_ajax_authorise' => secure_url('portfolio/stripe/ajax_authorise'),
			'csrf_token'         => csrf_token(),
		], $this->data);
	}

	/**
	 *
	 */
	public function checkoutAuthorise()
	{
		$id          = Core\Request::post('id');
		$stripeToken = Core\Request::post('stripeToken');

		try
		{
			\Stripe\Stripe::setApiKey(self::getSecretKey());
			$response = \Stripe\Charge::create(array(
				"amount"      => self::getAmount(),
				"currency"    => self::getCurrencyCode(),
				"source"      => $stripeToken,
				"description" => "Test Payment #" . $id,
			));

			if ($response instanceof \Stripe\Charge)
			{
				pre($response);
			}
		}
		catch (\Exception $e)
		{
			pre($e);
		}
	}

	/**
	 * @return int
	 */
	public static function getId()
	{
		return rand();
	}

	/**
	 *
	 */
	public static function getAmount()
	{
		return "999";
	}

	/**
	 * @return string
	 */
	private static function getSecretKey()
	{
		/**
		 * Only test keys, does not matter that they're in the source
		 */
		return "sk_test_Fy2gjzzTjIkPCENjxuLBn28M";
	}

	/**
	 * @return string
	 */
	private static function getPublishKey()
	{
		/**
		 * Only test keys, does not matter that they're in the source
		 */
		return "pk_test_LbFIAL4dmQyihwu1kX1OfcNI";
	}

	/**
	 * @return string
	 */
	private static function getCurrencyCode()
	{
		return "GBP";
	}
}
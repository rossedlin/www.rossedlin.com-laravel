<?php
namespace App\Http\Controllers\Portfolio;

use \App\Http\Controllers;
use \App\Objects;
use Cryslo\Api;
use \Cryslo\Core;
use Cryslo\Object;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 20/12/2016
 * Time: 17:35
 *
 * Class Stripe
 *
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
	public function apiAuthorise()
	{
		$api   = new Object\Api();
		$id    = Core\Request::post('id');
		$token = Core\Request::post('token');

		try
		{
			\Stripe\Stripe::setApiKey(self::getSecretKey());
			$response = \Stripe\Charge::create(array(
				"amount"      => self::getAmount(),
				"currency"    => self::getCurrencyCode(),
				"source"      => $token['id'],
				"description" => "Test Payment #" . $id,
			));

			if ($response instanceof \Stripe\Charge)
			{
				$api->setSuccess(true);
				$api->setMessage(view('alerts/success-stripe', [
					'title'   => "Success",
					'message' => "Great! You just made a test payment.",
				]));
			}
		}
		catch (\Exception $e)
		{
			$api->setSuccess(false);
			$api->setMessage(view('alerts/danger-1', [
				'title'   => "Error",
				'message' => "Oh... Had a slight problem, maybe try it again? :/",
			]));
		}


		Api\Factory::renderAndExit($api);
	}

	/**
	 * @return int
	 */
	public static function getId()
	{
		return time();
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
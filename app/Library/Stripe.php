<?php
namespace App\Library\Payment;
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 03/01/2017
 * Time: 16:35
 *
 *
 * Class Stripe
 * @package App\Library\Payment
 */
class Stripe
{
	/**
	 * @return string
	 */
	public static function getSecretKey()
	{
		return "sk_test_Fy2gjzzTjIkPCENjxuLBn28M";
	}

	/**
	 * @return string
	 */
	public static function getPublishKey()
	{
		return "pk_test_LbFIAL4dmQyihwu1kX1OfcNI";
	}

	/**
	 * @return string
	 */
	public static function getCurrencyCode()
	{
		return "GBP";
	}
}
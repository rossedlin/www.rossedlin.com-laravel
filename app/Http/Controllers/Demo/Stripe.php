<?php
namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Library\Payment;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 20/12/2016
 * Time: 17:35
 *
 * Class Stripe
 * @package App\Http\Controllers
 */
class Stripe extends Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		return view('demo/stripe', [
			'secret_key'         => Payment\Stripe::getSecretKey(),
			'publish_key'        => Payment\Stripe::getPublishKey(),
			'url_ajax_authorise' => secure_url('demo/stripe/ajax_authorise'),
			'csrf_token'         => csrf_token(),
		]);
	}

	/**
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function AjaxAuthorise(Request $request)
	{
		$success = false;
		$message = "";
		$token  = $request->input('token');
		$amount = (int)$request->input('amount');

		try
		{
			\Stripe\Stripe::setApiKey(Payment\Stripe::getSecretKey());
			$response = \Stripe\Charge::create(array(
				"amount"      => $amount,
				"currency"    => Payment\Stripe::getCurrencyCode(),
				"source"      => $token,
				"description" => "",
			));

			if ($response instanceof \Stripe\Charge)
			{
				$success = true;
			}
		}
		catch (\Exception $e)
		{
			$message = $e->getMessage();
		}

		return response()->json([
			'amount'  => $amount,
			'success' => $success,
			'message' => $message,
		]);
	}
}
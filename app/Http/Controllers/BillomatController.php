<?php
namespace App\Http\Controllers;

use \App\Objects;
use \Cryslo\Core;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 05/09/2017
 * Time: 13:43
 *
 * Class PageController
 * @package App\Http\Controllers
 */
class BillomatController extends _Controller
{
	const API_KEY = '13dea67a819a1856d18eb4bd06e62089';

	//https://bfueiewve.billomat.net/api/clients?api_key=13dea67a819a1856d18eb4bd06e62089

	/**
	 * @param $id
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		pre(htmlentities($this->_query('https://bfueiewve.billomat.net/api/invoices', [
			'requestHeader' => ['X-BillomatApiKey: ' . self::API_KEY],
		])));
	}

	/**
	 * @param $billomatID
	 * @param $ressource
	 * @param $id
	 * @param $method
	 *
	 * @return string
	 */
	private function getUrl($billomatID, $ressource, $id, $method)
	{
		return "https://" . $billomatID . ".billomat.net/api/" . $ressource . "[/{$id}][/" . $method . "]";
	}

	/**
	 * @param       $subUrl
	 * @param array $args
	 *
	 * @return mixed
	 */
	private function _query($subUrl, $args = [])
	{
		$order         = Core\Request::getFromArray($args, 'order', false);
		$requestMethod = Core\Request::getFromArray($args, 'requestMethod', false);
		$requestType   = Core\Request::getFromArray($args, 'requestType', 'GET');
		$requestHeader = Core\Request::getFromArray($args, 'requestHeader', []);
		$requestBody   = Core\Request::getFromArray($args, 'requestBody', []);

		$fullUrl = $subUrl;

		try
		{
			/**
			 * Check URL
			 */
//			if (Core\Utils::startsWith($subUrl, Url::getApi()))
//			{
////				throw new \Exception("Bad URL: " . $subUrl);
//			}

//			/**
//			 * Check Request Method
//			 */
//			if (!Utils::isValidRequestMethod($requestMethod))
//			{
//				throw new Exception("Invalid Request Method: " . $requestMethod);
//			}

//			/**
//			 * Check Request Type
//			 */
//			if (!Utils::isValidRequestType($requestType))
//			{
//				throw new Exception("Invalid Request Type: " . $requestType);
//			}

			/**
			 * Build URL
			 */
//			$fullUrl = Url::getApi() . $subUrl;

			$requestTime = microtime(true);

			/**
			 * Connect to URL and get response
			 */
			$ch = curl_init($fullUrl);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $requestType);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $requestHeader);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestBody));
//			curl_setopt($ch, CURLOPT_HEADER, 1); //ensure we get header from response

			$response = curl_exec($ch);

			return $response;
		}
		catch (\Exception $e)
		{
			throw $e;
//			throw Log::exception($e);
		}
	}
}
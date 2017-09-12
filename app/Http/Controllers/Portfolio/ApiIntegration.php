<?php
namespace App\Http\Controllers\Portfolio;

use \App\Http\Controllers;
use \App\Objects;
use \Cryslo\Core;
use \Cryslo\Api;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 05/09/2017
 * Time: 14:28
 *
 * Class PageController
 *
 * @package App\Http\Controllers
 */
class ApiIntegration extends Controllers\_Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		return view('pages/portfolio/api-integration/index');
	}

	/**
	 *
	 */
	public function apiGetRequest()
	{
		$raw = Api::query(Core\Request::post('url'), [
			'requestType' => 'GET',
		]);

		$obj = json_decode($raw);

		echo json_encode($obj, JSON_PRETTY_PRINT);
		exit;
	}
}
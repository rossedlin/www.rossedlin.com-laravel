<?php
namespace App\Http\Controllers\Demo;

use \App\Http\Controllers;
use \App\Objects;
use \Cryslo\Core;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 05/09/2017
 * Time: 14:28
 *
 * Class PageController
 * @package App\Http\Controllers
 */
class ApiIntegration extends Controllers\_Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		$this->data['sample_url'] = $this->_getSampleUrl();
		$this->data['ajax_get_request_url'] = env('APP_URL') . 'demo/api-integration/ajax_get_request';

		return view('pages/demo/api', $this->data);
	}

	/**
	 *
	 */
	public function ajax_get_request()
	{
		echo(Core\Api::query(Core\Request::post('url'), [
			'requestType' => 'GET',
		]));
		exit;
	}

	/**
	 *
	 */
	public function sample()
	{
		echo(json_encode([
			'id'      => 9999,
			'message' => "Hey, I'm a JSON object, you can find my at: " . $this->_getSampleUrl(),
		], JSON_PRETTY_PRINT));
		exit;
	}

	/**
	 * @return string
	 */
	private function _getSampleUrl()
	{
		return "https://reqres.in/api/users?page=2";
		return env('APP_URL'). 'demo/api-integration/sample';
	}
}
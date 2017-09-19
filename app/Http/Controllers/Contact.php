<?php
namespace App\Http\Controllers;

use \App\Objects;
use \Cryslo\Core;
use \Cryslo\Api;
use \Cryslo\Object;

/**
 * Created by PhpStorm.
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 09/09/2017
 * Time: 17:59
 *
 * Class Portfolio
 * @package App\Http\Controllers
 */
class Contact extends _Web
{
	/**
	 * @param $id
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke($id = 'index')
	{
		return view('contact', $this->data);
	}

	/**
	 * @return string
	 */
	public function api()
	{
		$api = new Object\Api();
		$api->setRequest([
			'_token'  => Core\Request::post('_token'),
			'name'    => Core\Request::post('name'),
			'email'   => Core\Request::post('email'),
			'message' => Core\Request::post('message'),
		]);

		$transport = \Swift_SmtpTransport::newInstance(env('MAIL_HOST'), env('MAIL_PORT'));
		$transport->setUsername(env('MAIL_USERNAME'));
		$transport->setPassword(env('MAIL_PASSWORD'));

		$email = new Object\Email();
		$email->setTransport($transport);
		$email->setTo('contact@rossedlin.com');
		$email->setFrom('noreply@rossedlin.com');
		$email->setBody("efwefw");

		try
		{
			Core\Email::send($email);
			$api->setSuccess(true);
		}
		catch (\Exception $e)
		{
			$api->addDebug($e->getMessage());
		}

		return $api->renderAsJson();
	}
}
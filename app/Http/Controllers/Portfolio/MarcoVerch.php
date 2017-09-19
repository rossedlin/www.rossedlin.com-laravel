<?php
namespace App\Http\Controllers\Portfolio;

use \App\Http\Controllers;
use \App\Objects;
use \Cryslo\Core;
use \Cryslo\Api;

use MarcoVerch\Billomat;
use MarcoVerch\Billomat\Objects\Invoice;
use MarcoVerch\Mandrill;

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
class MarcoVerch extends Controllers\_Web
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		return view('pages/portfolio/marco-verch', $this->data);
	}

	/**
	 *
	 */
	public function ajaxMarkInvoiceComplete()
	{
		$invoice_id = (int)Core\Request::post('invoice_id');

		$api = new \Cryslo\Object\Api();
		$api->addDebug('ajaxSendInvoice');
		$api->addDebug($invoice_id);

		if ($invoice_id)
		{
			$invoice = new Invoice();
			$invoice->setId($invoice_id);

			try
			{
				$api->setPayload([Billomat::setInvoiceComplete($invoice)]);
			}
			catch (\Exception $e)
			{
				$api->setPayload([$e->getMessage()]);
			}
		}

		echo $api->getResponseAsJson();
		exit;
	}

	/**
	 *
	 */
	public function ajaxSendInvoice()
	{
		$invoice_id = (int)Core\Request::post('invoice_id');
		$email      = Core\Request::post('email');

		$api = new \Cryslo\Object\Api();
		$api->addDebug('ajaxSendInvoice');
		$api->addDebug($invoice_id);
		$api->addDebug($email);

		if ($invoice_id)
		{
			$invoice = new Invoice();
			$invoice->setId($invoice_id);

			try
			{
				$pdf = \MarcoVerch\Api::xmlToArray(Billomat::getInvoicePdf($invoice));

				$message = new Mandrill\Objects\Message('Test Name', $email);
				$message->addAttachment($pdf['mimetype'], $pdf['filename'], $pdf['base64file']);

				$api->addDebug($pdf['filename']);
				$api->setPayload([Mandrill::sendMessages($message)]);
			}
			catch (\Exception $e)
			{

			}
		}

		echo $api->getResponseAsJson();
		exit;
	}
}
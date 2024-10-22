<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class QrcodeController extends Controller
{
	public function index()
	{
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;
		$data = (new DataService())->getDataServiceBackEnd($data, $user_id);
		// ---------------------------------------------------------------------- //

		$class_link = new Link();
		$data['links'] = $class_link->getLinksAndDomainsByUserId($user_id);

		$class_qrcode = new QRCodeCustom();
		$data['qrcodes'] = $class_qrcode->getQRCodesJoinsLinksByUserId($user_id);
		$data['totalEnabled'] = $class_qrcode->getAllQRCodesIsEnabledByUserID($user_id);
		$data['totalDisabled'] = $class_qrcode->getAllQRCodesIsDisabledByUserID($user_id);

		require_once(__DIR__ . '/forms/qr-code-create.php');
		require_once(__DIR__ . '/forms/qr-code-enabled.php');
		require_once(__DIR__ . '/forms/qr-code-get.php');
		require_once(__DIR__ . '/forms/qr-code-delete.php');

		// Carrega o template com os dados obtidos
		$this->loadTemplate('admin/qrcode/index', $data);
	}

	public function edit()
	{
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;
		$data = (new DataService())->getDataServiceBackEnd($data, $user_id);
		// ---------------------------------------------------------------------- //

		$link_id = $_SESSION['link_id'] ?? null;
		$qrcode_id = $_SESSION['qrcode_id'] ?? null;

		$class_link = new Link();
		$data['link'] = $class_link->getAllTablesByLinkId($link_id);
		//$data['links'] = $class_link->getLinksAndDomainsByUserId($user_id);

		$class_qrcode = new QRCodeCustom();
		$data['qrcode'] = $class_qrcode->getQRCodeByQRCodeId($qrcode_id);

		require_once(__DIR__ . '/forms/qr-code-update.php');
		require_once(__DIR__ . '/forms/qr-code-enabled.php');
		require_once(__DIR__ . '/forms/qr-code-delete.php');

		// Carrega o template com os dados obtidos
		$this->loadTemplate('admin/qrcode/edit', $data);
	}
}

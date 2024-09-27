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
		$page = 'qrcode/index';
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;

		// Chama o serviço para obter os dados
		$data = (new DataService())->getDataServiceBackEnd($data, $user_id);

		$class_link = new Link();
		$data['links'] = $class_link->getLinksJoinDomainsByUserId($user_id);

		$class_qrcode = new QRCodeCustom();
		$data['qrcodes'] = $class_qrcode->getQRCodesJoinsLinksByUserId($user_id);
		$data['totalEnabled'] = $class_qrcode->getAllQRCodesIsEnabledByUserID($user_id);
		$data['totalDisabled'] = $class_qrcode->getAllQRCodesIsDisabledByUserID($user_id);

		require_once(__DIR__ . '/forms/qr-code-create.php');
		require_once(__DIR__ . '/forms/qr-code-enabled.php');
		require_once(__DIR__ . '/forms/qr-code-get.php');
		require_once(__DIR__ . '/forms/qr-code-delete.php');

		// Carrega o template com os dados obtidos
		$this->loadTemplate($page, $data);
	}

	public function edit()
	{
		$page = 'qrcode/edit';
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;
		$link_id = $_SESSION['link_id'] ?? null;
		$qrcode_id = $_SESSION['qrcode_id'] ?? null;

		// Chama o serviço para obter os dados
		$data = (new DataService())->getDataServiceBackEnd($data, $user_id);

		$class_link = new Link();
		$data['link'] = $class_link->getLinkJoinsAllTablesByLinkId($link_id);
		$data['links'] = $class_link->getLinksJoinDomainsByUserId($user_id);

		$class_qrcode = new QRCodeCustom();
		$data['qrcode'] = $class_qrcode->getQRCodeByQRCodeId($qrcode_id);

		require_once(__DIR__ . '/forms/qr-code-update.php');
		require_once(__DIR__ . '/forms/qr-code-enabled.php');
		require_once(__DIR__ . '/forms/qr-code-delete.php');

		// Carrega o template com os dados obtidos
		$this->loadTemplate($page, $data);
	}
}

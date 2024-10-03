<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class PixelController extends Controller
{
	public function index()
	{
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;
		$data = (new DataService())->getDataServiceBackEnd($data, $user_id);
		// ---------------------------------------------------------------------- //

		$class_link = new Link();
		$data['links'] = $class_link->getLinksAndDomainsByUserId($user_id);

		$class_pixel = new Pixel();
		$data['pixels'] = $class_pixel->getPixelsJoinLinksByUserId($user_id);
		$data['totalEnabled'] = $class_pixel->getAllPixelsIsEnabledByUserID($user_id);
		$data['totalDisabled'] = $class_pixel->getAllPixelsIsDisabledByUserID($user_id);

		require_once(__DIR__ . '/forms/pixel-create.php');
		require_once(__DIR__ . '/forms/pixel-enabled.php');
		require_once(__DIR__ . '/forms/pixel-get.php');
		require_once(__DIR__ . '/forms/pixel-delete.php');

		// Carrega o template com os dados obtidos
		$this->loadTemplate('admin/pixel/index', $data);
	}

	public function edit()
	{
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;
		$data = (new DataService())->getDataServiceBackEnd($data, $user_id);
		// ---------------------------------------------------------------------- //

		$link_id = $_SESSION['link_id'] ?? null;		
		$pixel_id = $_SESSION['pixel_id'] ?? null;

		$class_link = new Link();
		$data['link'] = $class_link->getAllTablesByLinkId($link_id);
		//$data['links'] = $class_link->getLinksAndDomainsByUserId($user_id);

		$class_pixel = new Pixel();
		$data['pixel'] = $class_pixel->getPixelByPixelId($pixel_id);

		require_once(__DIR__ . '/forms/pixel-update.php');
		require_once(__DIR__ . '/forms/pixel-delete.php');

		// Carrega o template com os dados obtidos
		$this->loadTemplate('admin/pixel/edit', $data);
	}
}

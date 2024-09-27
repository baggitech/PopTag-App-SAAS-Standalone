<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class AdminController extends Controller
{
	public function index()
	{
		$page = 'admin/dashboard/index';
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;

		// Chama o serviço para obter os dados
		$data = (new DataService())->getDataServiceBackEnd($data, $user_id);

		$class_dashboard = new Dashboard();
		$data['totalLinksPerUser'] = $class_dashboard->getAllLinksByUserID($user_id);
		$data['totalQRCodesPerUser'] = $class_dashboard->getAllQRCodesByUserID($user_id);

		// Carrega o template com os dados obtidos
		$this->loadTemplate($page, $data);
	}
}
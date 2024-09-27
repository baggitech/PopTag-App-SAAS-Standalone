<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class VerifyController extends Controller
{
	public function index()
	{
		$page = 'admin/verify/index';
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;

		// Chama o serviço para obter os dados
		$data = (new DataService())->getDataServiceBackEnd($data, $user_id);

		$class_user = new User();
		$data['user'] = $class_user->getUser($user_id);

		//require_once(__DIR__ . '/forms/verify.php');

		// Carrega o template com os dados obtidos
		$this->loadTemplate($page, $data);
	}
}

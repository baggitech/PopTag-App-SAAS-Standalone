<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class SigninController extends Controller
{
	public function index()
	{
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;
		$data = (new DataService())->getDataServiceFrontEnd($data);
		// ---------------------------------------------------------------------- //

		$class_auth = new Authentication();
		$class_auth->requireLogout();

		if (!isset($_SESSION['csrf_token'])) {
			$csrf_token = $class_auth->generateCsrfToken();
			$_SESSION['csrf_token'] = $csrf_token;
		}

		require_once(__DIR__ . '/forms/signin.php');

		// Carrega o template com os dados obtidos
		$this->loadTemplate('admin/signin/index', $data);
	}
}

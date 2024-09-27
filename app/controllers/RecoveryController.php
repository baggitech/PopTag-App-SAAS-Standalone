<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class RecoveryController extends Controller
{
	public function index()
	{
		$page = 'recovery/index';
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;

		// Chama o serviço para obter os dados
		$data = (new DataService())->getDataServiceFrontEnd($data);

		$class_auth = new Authentication();
		$class_auth->requireLogout();

		if (!isset($_SESSION['csrf_token'])) {
			$csrf_token = $class_auth->generateCsrfToken();
			$_SESSION['csrf_token'] = $csrf_token;
		}

		require_once(__DIR__ . '/forms/recovery.php');

		// Carrega o template com os dados obtidos
		$this->loadTemplate($page, $data);
	}

	public function password()
	{
		$page = 'recovery/password';
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;

		// Chama o serviço para obter os dados
		$data = (new DataService())->getDataServiceFrontEnd($data);

		$class_auth = new Authentication();
		$class_auth->requireLogout();

		$class_user = new User();

		if (!isset($_SESSION['csrf_token'])) {
			$csrf_token = $class_auth->generateCsrfToken();
			$_SESSION['csrf_token'] = $csrf_token;
		}

		require_once(__DIR__ . '/forms/recovery-token.php');
		require_once(__DIR__ . '/forms/recovery-password.php');

		// Carrega o template com os dados obtidos
		$this->loadTemplate($page, $data);
	}

	public function requested()
	{
		$page = 'recovery/requested';
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;

		// Chama o serviço para obter os dados
		$data = (new DataService())->getDataServiceFrontEnd($data);

		$class_auth = new Authentication();
		$class_auth->requireLogout();

		// Carrega o template com os dados obtidos
		$this->loadTemplate($page, $data);
	}

	public function changed()
	{
		$page = 'recovery/changed';
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;

		// Chama o serviço para obter os dados
		$data = (new DataService())->getDataServiceFrontEnd($data);

		$class_auth = new Authentication();
		$class_auth->requireLogout();

		// Carrega o template com os dados obtidos
		$this->loadTemplate($page, $data);
	}
}

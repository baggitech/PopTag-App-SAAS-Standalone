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
		$data = array();
		$data = (new DataService())->getDataServiceFrontEnd($data);
		// ---------------------------------------------------------------------- //

		$class_auth = new Authentication();
		$class_auth->requireLogout();

		// if (!isset($_SESSION['csrf_token'])) {
		// 	$csrf_token = $class_auth->generateCsrfToken();
		// 	$_SESSION['csrf_token'] = $csrf_token;
		// }

		require_once(__DIR__ . '/forms/recovery.php');

		// Carrega o template com os dados obtidos
		$this->loadTemplate('admin/recovery/index', $data);
	}

	public function password()
	{
		$data = array();
		$data = (new DataService())->getDataServiceFrontEnd($data);
		// ---------------------------------------------------------------------- //

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
		$this->loadTemplate('admin/recovery/password', $data);
	}

	public function requested()
	{
		$data = array();
		$data = (new DataService())->getDataServiceFrontEnd($data);
		// ---------------------------------------------------------------------- //

		$class_auth = new Authentication();
		$class_auth->requireLogout();

		// Carrega o template com os dados obtidos
		$this->loadTemplate('admin/recovery/requested', $data);
	}

	public function changed()
	{
		$data = array();
		$data = (new DataService())->getDataServiceFrontEnd($data);
		// ---------------------------------------------------------------------- //

		$class_auth = new Authentication();
		$class_auth->requireLogout();

		// Carrega o template com os dados obtidos
		$this->loadTemplate('admin/recovery/changed', $data);
	}
}

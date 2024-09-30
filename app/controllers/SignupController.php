<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class SignupController extends Controller
{
	// START - PAGE SIGNUP
	public function index()
	{
		$page = 'admin/signup/index';
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

		$class_code_generate = new CodeGenerate();
		$data['captcha_code'] = $class_code_generate->generatingCode(6, false, true, true, false);
		$_SESSION['captcha_code'] = $data['captcha_code'];

		$captcha_code = $_SESSION['captcha_code'];
		$class_capcha_code = new Captcha();
		$data['captcha_code'] = $class_capcha_code->generatingCaptchaImage($captcha_code);

		require_once(__DIR__ . '/forms/signup.php');

		// Carrega o template com os dados obtidos
		$this->loadTemplate($page, $data);
	}
}

<?php
if (isset($_GET['token'])) {
	// Verifica se o token CSRF é válido
	// if (!isset($_GET['token']) || !hash_equals($_SESSION['csrf_token'], $_GET['token'])) {
	// 	$error_message = "Token inválido. Tente novamente.";
	// 	$_SESSION['error_message'] = $error_message;
	// 	header("Location: " . URL_PATH . "recovery");
	// 	exit;
	// } else {

	$token = $_GET['token'];

	$class_recovery = new Recovery();
	$data['recovery_link'] = $class_recovery->getEmailAndTokenRecovery($token);

	if ($token === $data['recovery_link']['token']) {

		$_SESSION['token'] = $data['recovery_link']['token'];

		$_SESSION['email'] = $data['recovery_link']['email'];

		$email = $_SESSION['email'];

		$class_user->changeStatusToVerified($email, $code_verify);
	} else {
		$error_message = "Token inválido! Tente novamente.";
		$_SESSION['error_message'] = $error_message;
		header("Location: " . URL_PATH . "recovery");
		exit;
	}
	//}
}

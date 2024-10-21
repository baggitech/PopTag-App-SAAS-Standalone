<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'recovery') {
	// Verifica se o token CSRF é válido
	if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) {

		// Define a mensagem de erro de token inválido
		$_SESSION['error_message'] = "Token inválido. Tente novamente.";
		header('Location: ' . URL_PATH . 'recovery');
		exit;
	} else {
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

		// Verifica se a variável ($email) não está vazia
		if (!empty($email)) {
			// Instancia a classe (Recovery)
			$class_recovery = new Recovery();

			// Verifica se o e-mail existe na tabela (users)
			$if_email_exists = $class_recovery->checkEmailUsersTable($email);

			if ($if_email_exists) {
				// Gera um token aleatório
				$token = bin2hex(random_bytes(16));

				// Verifica se o email existe na tabela (recovery_token)
				$if_email_exists = $class_recovery->checkEmailRecoveryTable($email);

				if ($if_email_exists) {
					// Gera um token novo no lugar do antigo
					$class_recovery->generateNewToken($email, $token);
				} else {
					// Cria um token de recuperação novo.
					$class_recovery->addToken($email, $token);
				}

				// cria link de redefinição de senha
				$resetLink = "https://poptag.app/recovery/password/?token=" . urlencode($token);

				$addresses = $email;
				$subject = 'Recuperação de conta';
				$body = '<b>Link:</b><br><br><a href="' . $resetLink . '">' . $resetLink . '</a>';

				$class_email_recovery_link = new EmailManager();
				$send_email = $class_email_recovery_link->sendEmail($addresses, $subject, $body);

				if ($send_email) {
					// Exibe uma mensagem de sucesso para o usuário
					$_SESSION['success_message'] = "Verifique o seu e-mail!";
					header("Location: " . URL_PATH . "recovery/requested");
					exit;
				} else {
					$_SESSION['error_message'] = "Algo saiu errado!";
					header("Location: " . URL_PATH . "recovery");
					exit;
				}
			} else {
				$_SESSION['error_message'] = "Email não existe em nossa base de dados!";
				header("Location: " . URL_PATH . "recovery");
				exit;
			}
		} else {
			$_SESSION['error_message'] = "Email não pode estar vazio!";
			header("Location: " . URL_PATH . "recovery");
			exit;
		}
	}
}

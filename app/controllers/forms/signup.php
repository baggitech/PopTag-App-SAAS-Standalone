<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'signup')
{
    // Verifica se o token CSRF é válido
    if (isset($_POST['token']) && !hash_equals($_SESSION['csrf_token'], $_POST['token'])) {

        // Define a mensagem de erro de token inválido
        $_SESSION['error_message'] = "Token inválido. Tente novamente.";
        header('Location: ' . URL_PATH . 'signup');
        exit;
    } 
    else 
    {
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		$password = $_POST['password']; // Não é necessário filtrar
		$captcha_code = filter_input(INPUT_POST, 'captcha_code', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
		$captcha = filter_input(INPUT_POST, 'captcha', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
		$code_verify = $class_code_generate->generatingCode(6, false, false, true, false);

		// Validação do campo "name"
		if (empty($name)) {
			// O campo "name" é obrigatório
			$_SESSION['error_message'] = "Por favor, forneça um nome.";
			header("Location: " . URL_PATH . "signup");
			exit;
		}

		// Validação do campo "email"
		if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			// O campo "email" é obrigatório e deve ser um endereço de email válido
			$_SESSION['error_message'] = "Por favor, forneça um endereço de email válido.";
			header("Location: " . URL_PATH . "signup");
			exit;
		}

		// Validação do campo "password"
		if (empty($password)) {
			$_SESSION['error_message'] = "Senha não pode estar vazia!";
			header("Location: " . URL_PATH . "signup");
			exit;
		}

		// Validação do campo "captcha"
		if (empty($captcha_code) || $captcha_code !== $captcha) {
			// O campo "captcha" está incorreto ou em branco
			$_SESSION['error_message'] = "Código captcha incorreto. Por favor, tente novamente.";
			header("Location: " . URL_PATH . "signup");
			exit;
		}

		$class_user = new User();
		if ($class_user->addUser($name, $email, $password, $code_verify)) {

			// cria link de ativação de senha
			$activeCode = $code_verify;

			$addresses = $email;
			$subject = 'Ativação de conta de conta';
			$body = '<b>Código de ativação:</b><br><br>' . $activeCode;

			$class_email_active_link = new EmailManager();
			if ($class_email_active_link->sendEmail($addresses, $subject, $body)) {
				$_SESSION['success_message'] = "Cadastro realizado com sucesso!";
				header("Location: " . URL_PATH . "signin");
				exit;
			} else {
				$_SESSION['error_message'] = "Algo saiu errado!";
				header("Location: " . URL_PATH . "signup");
				exit;
			}
		} else {
			$_SESSION['error_message'] = "E-mail já cadastrado!";
			header("Location: " . URL_PATH . "signup");
			exit;
		}
	}
}

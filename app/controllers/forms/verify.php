<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'form_verify') 
{
    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) {

        // Define a mensagem de erro de token inválido
        $_SESSION['error_message'] = "Token inválido. Tente novamente.";
        header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
        exit;
    }
	 else 
	 {
        // PADRÃO EM TODOS OS FORMULÁRIOS
        $input_data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		$email = $_SESSION['email'];
        $code_verify = $input_data['code_verify'] ?? null;

		if (empty($code_verify)) 
		{
			$error_message = "Campo não pode estar vazio!";
			$_SESSION['error_message'] = $error_message;
			header("Location: " . URL_PATH . "verify");
			exit;
		}

		$class_verify = new Verify();
		$string = $class_verify->changeStatusToVerified($email, $code_verify);

		if ($string) 
		{
			$_SESSION['success_message'] = "Código verificado com Sucesso!";
			header("Location: " . URL_PATH . "logout");
			exit;
		} 
		else 
		{
			$_SESSION['error_message'] = "Código não confere!";
			header("Location: " . URL_PATH . "verify");
			exit;
		}
	}
}

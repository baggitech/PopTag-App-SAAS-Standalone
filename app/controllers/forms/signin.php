<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'signin')
{
    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
	{
        // Define a mensagem de erro de token inválido
        $_SESSION['error_message'] = "Token inválido. Tente novamente.";
        header('Location: ' . URL_PATH . 'signup');
        exit;
    }
    else
    {
        $input_data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		$token = $input_data['token'];
		$email = filter_var($input_data['email'], FILTER_SANITIZE_EMAIL);
		$password = $input_data['password'];

		if(empty($email))
		{
    		$_SESSION['error_message'] = "E-mail não pode estar vazio!";
	    	header("Location: ".URL_PATH."signin");
	    	exit;
		}
    	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    	{
    		$_SESSION['error_message'] = "E-mail inválido!";
	    	header("Location: ".URL_PATH."signin");
	    	exit;
    	}
		if(empty($password))
		{
    		$_SESSION['error_message'] = "Senha não pode estar vazia!";
	    	header("Location: ".URL_PATH."signin");
	    	exit;
		}
		if($class_auth->authLogin($email, $password, $token)) 
		{
			$name = $_SESSION['user'];
			$user_id = $_SESSION['user_id'];
			$hora = date("H");
			$class_greet = new Greet();
			$greet = $class_greet->greeting($hora);
			$class_short_name = new ShortName();
			$short_name = $class_short_name->firstNameLastName($name);

    		$_SESSION['success_message'] = "Login bem sucedido!";
    		header("Location: ".URL_PATH."dashboard");
    		exit;				
		}
		else
		{	
    		$_SESSION['error_message'] = "E-mail ou senha inválidos!";
	    	header("Location: ".URL_PATH."signin");
	    	exit;
		}
			
    }
}
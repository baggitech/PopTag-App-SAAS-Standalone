<?php
if(isset($_POST['form_qrcode_enabled_1']))
{
    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        $error_message = "Token inválido. Tente novamente.";
        $_SESSION['error_message'] = $error_message;
        header("Location: " . URL_PATH . "qrcode");
        exit;
    }
    else
    {
		$qrcode_id = filter_input(INPUT_POST, 'qrcode_id', FILTER_SANITIZE_NUMBER_INT);
		$qrcode_is_enabled = filter_input(INPUT_POST, 'qrcode_is_enabled', FILTER_VALIDATE_INT);

		if($qrcode_is_enabled == null || $qrcode_is_enabled == 0)
		{
			$qrcode_is_enabled = 0;

			if($class_qrcode->enabledQRCode($user_id, $qrcode_id, $qrcode_is_enabled))
			{
			    $success_message = "QR Code ativado!";
			    $_SESSION['success_message'] = $success_message;
		    	header("Location: ".URL_PATH."qrcode");
		    	exit;
			}
		}
	    else
	    {
			if($class_qrcode->enabledQRCode($user_id, $qrcode_id, $qrcode_is_enabled))
			{
			   	$error_message = "QR Code desativado!";
			   	$_SESSION['error_message'] = $error_message;
		    	header("Location: ".URL_PATH."qrcode");
		    	exit;
			}	    			
	    }
	}
}

if(isset($_POST['form_qrcode_enabled_2']))
{
    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        $error_message = "Token inválido. Tente novamente.";
        $_SESSION['error_message'] = $error_message;
        header("Location: ".URL_PATH."qrcode/edit/".$qrcode_id);
        exit;
    }
    else
    {
		$qrcode_id = filter_input(INPUT_POST, 'qrcode_id', FILTER_SANITIZE_NUMBER_INT);
		$qrcode_is_enabled = filter_input(INPUT_POST, 'qrcode_is_enabled', FILTER_VALIDATE_BOOLEAN);

		if($qrcode_is_enabled == 1)
		{	
			if($class_qrcode->setEnabledQRCode($qrcode_id, $qrcode_is_enabled))
			{
			    $success_message = "QR Code ativado!";
			    $_SESSION['success_message'] = $success_message;
		    	header("Location: ".URL_PATH."qrcode/edit/".$qrcode_id);
		    	exit;
			}
		}
	    else
	    {
			if($class_qrcode->setEnabledQRCode($qrcode_id, $qrcode_is_enabled))
			{
			   	$error_message = "QR Code desativado!";
			   	$_SESSION['error_message'] = $error_message;
		    	header("Location: ".URL_PATH."qrcode/edit/".$qrcode_id);
		    	exit;
			}	    			
	    }
	}
}
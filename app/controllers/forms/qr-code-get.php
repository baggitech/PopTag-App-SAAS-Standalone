<?php
if(isset($_POST['form_qrcode_get']))
{
    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        $_SESSION['error_message'] = "Token inválido. Tente novamente.";
        header("Location: ".URL_PATH."qrcode");
        exit;
    }
    else
    {
	    $qrcode_id = filter_input(INPUT_POST, 'qrcode_id', FILTER_SANITIZE_NUMBER_INT);

	    if(!empty($qrcode_id))
	    {	
	        if($class_qrcode->getQRCodeByQRCodeId($qrcode_id))
	        {
	        	header("Location: ".URL_PATH."qrcode/edit/".$qrcode_id);
				exit;
	        }
	        else
	        {
	        	$error_message = "QR Code não existe!";
		    	$_SESSION['error_message'] = $error_message;
		    	header("Location: ".URL_PATH."qrcode");
		    	exit;
	        }
	    }    	
    }
}


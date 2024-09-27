<?php
if(isset($_POST['form_pixel_get']))
{
    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        $_SESSION['error_message'] = "Token inválido. Tente novamente.";
        header("Location: ".URL_PATH."pixel");
        exit;
    }
    else
    {
	    $pixel_id = filter_input(INPUT_POST, 'pixel_id', FILTER_SANITIZE_NUMBER_INT);

	    if(!empty($pixel_id))
	    {	
	        if($class_pixel->getPixelByPixelId($pixel_id))
	        {
	        	header("Location: ".URL_PATH."pixel/edit/".$pixel_id);
				exit;
	        }
		    else
		    {
		    	$error_message = "Pixel não existe!";
			   	$_SESSION['error_message'] = $error_message;
			   	header("Location: ".URL_PATH."pixel");
			   	exit;
		    }
	    }    	
    }
}


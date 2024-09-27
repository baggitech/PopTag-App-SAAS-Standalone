<?php
if(isset($_POST['form_pixel_enabled_1']))
{
    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        $error_message = "Token inválido. Tente novamente.";
        $_SESSION['error_message'] = $error_message;
        header("Location: ".URL_PATH."pixel");
        exit;
    }
    else
    {
		$pixel_id = filter_input(INPUT_POST, 'pixel_id', FILTER_SANITIZE_NUMBER_INT);
		$pixel_is_enabled = filter_input(INPUT_POST, 'pixel_is_enabled', FILTER_VALIDATE_INT);

		if($pixel_is_enabled == null || $pixel_is_enabled == 0)
		{	
			$pixel_is_enabled = 0;

			if($class_pixel->enabledPixel($user_id, $pixel_id, $pixel_is_enabled))
			{
			   	$error_message = "Pixel desativado!";
			   	$_SESSION['error_message'] = $error_message;
		    	header("Location: ".URL_PATH."pixel");
		    	exit;
			}
		}
	    else
	    {
			if($class_pixel->enabledPixel($user_id, $pixel_id, $pixel_is_enabled))
			{
			    $success_message = "Pixel ativado!";
			    $_SESSION['success_message'] = $success_message;
		    	header("Location: ".URL_PATH."pixel");
		    	exit;
			}	    			
	    }
	}
}

if(isset($_POST['form_pixel_enabled_2']))
{
    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        $error_message = "Token inválido. Tente novamente.";
        $_SESSION['error_message'] = $error_message;
        header("Location: ".URL_PATH."pixel/edit/".$pixel_id);
        exit;
    }
    else
    {
		$pixel_id = filter_input(INPUT_POST, 'pixel_id', FILTER_SANITIZE_NUMBER_INT);
		$pixel_is_enabled = filter_input(INPUT_POST, 'pixel_is_enabled', FILTER_VALIDATE_BOOLEAN);

		if($pixel_is_enabled == 1)
		{	
			if($class_pixel->enabledPixel($pixel_id, $pixel_is_enabled))
			{
			    $success_message = "Pixel ativado!";
			    $_SESSION['success_message'] = $success_message;
		    	header("Location: ".URL_PATH."pixel/edit/".$pixel_id);
		    	exit;
			}
		}
	    else
	    {
			if($class_pixel->enabledPixel($pixel_id, $pixel_is_enabled))
			{
			   	$error_message = "Pixel desativado!";
			   	$_SESSION['error_message'] = $error_message;
		    	header("Location: ".URL_PATH."pixel/edit/".$pixel_id);
		    	exit;
			}	    			
	    }
	}
}
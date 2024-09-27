<?php
if (isset($_POST['form_pixel_delete']))
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

	    if (empty($pixel_id)) 
	    {
	        $error_message = "Dados inválidos. Tente novamente.";
	        $_SESSION['error_message'] = $error_message;
	        header("Location: ".URL_PATH."pixel");
	        exit;
	    }

	    $pixel = $class_pixel->getPixelByPixelId($pixel_id);

	    if (!$pixel || $pixel['pixel_id'] != $pixel_id) 
	    {
	        $error_message = "Pixel não encontrado. Tente novamente.";
	        $_SESSION['error_message'] = $error_message;
	        header("Location: ".URL_PATH."pixel");
	        exit;
	    }

	    if ($class_pixel->deletePixel($pixel_id)) 
	    {
	        $success_message = "Pixel excluído com sucesso!";
	        $_SESSION['success_message'] = $success_message;
	        header("Location: ".URL_PATH."pixel");
	        exit;
	    } 
	    else 
	    {
	        $error_message = "Erro ao excluir o pixel. Tente novamente.";
	        $_SESSION['error_message'] = $error_message;
	        header("Location: ".URL_PATH."pixel");
	        exit;
	    }    	
    }
}
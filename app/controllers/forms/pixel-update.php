<?php
if (isset($_POST['form_pixel_update']))
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
		$pixel_name = filter_input(INPUT_POST, 'pixel_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$pixel_note = filter_input(INPUT_POST, 'pixel_note', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$pixel = filter_input(INPUT_POST, 'pixel', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$pixel_is_enabled = filter_input(INPUT_POST, 'pixel_is_enabled', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$pixel_last_date_time = date("Y-m-d H:i:s");


		if(!empty($pixel_id))
		{

			$class_pixel->setPixelUpdateByPixelId($pixel_id, $pixel_name, $pixel_note, $pixel, $pixel_is_enabled, $pixel_last_date_time);	

			$success_message = "Pixel atualizado com sucesso!";
			$_SESSION['success_message'] = $success_message;
			header("Location: ".URL_PATH."pixel/edit/".$pixel_id);
			exit;
		}
		else
		{
	    	$error_message = "Erro ao atualizar!";
	    	$_SESSION['error_message'] = $error_message;
	    	header("Location: ".URL_PATH."pixel/edit/".$pixel_id);
	    	exit;	
		}

    }
}


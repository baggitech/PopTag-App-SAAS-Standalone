<?php
if (isset($_POST['form_type_qr_code']))
{
    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        $error_message = "Token inválido. Tente novamente.";
        $_SESSION['error_message'] = $error_message;
        header("Location: ".URL_PATH."qrcode");
        exit;
    }
    else
    {
		$qr_code_type = $_POST['qr_code_type'];

        if (!empty($qr_code_type)) 
        {
           $_SESSION['qr_code_type'] = $qr_code_type;
           header("Location: ".URL_PATH."qrcode/create");
           exit;
        } 
        else 
        {
            $error_message = "A chave não existe no array social_media";
            $_SESSION['error_message'] = $error_message;
            header("Location: ".URL_PATH."qrcode");
            exit;
        }

    }
}	



		


	




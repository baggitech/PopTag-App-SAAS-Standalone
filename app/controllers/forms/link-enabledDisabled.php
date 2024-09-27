<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'link_enabledDisabled') 
{
    // Verifica se o token CSRF é válido
    if (isset($_POST['token']) && !hash_equals($_SESSION['csrf_token'], $_POST['token'])) {

        // Define a mensagem de erro
        $_SESSION['error_message'] = "Token inválido. Tente novamente.";
        header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
        exit;
    } 
    else 
    {
        // PADRÃO EM TODOS OS FORMULÁRIOS
        $input_data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $link_id = $input_data['link_id'] ?? null;

        // INPUTS VARIÁVEIS
        $link_is_enabled = $input_data['link_is_enabled'] ?? null;
                
        if($link_is_enabled == null || $link_is_enabled == 0)
        {	
            $link_is_enabled = 0;

            $disabled = $class_link->enabledDisabledLink($link_id, $link_is_enabled);
            
            if($disabled)
            {
                // Define a mensagem de aucesso
                $_SESSION['warning_message'] = 'Link desativado!';
                header("Location: " . URL_PATH . "link");
                exit;
            }
        }
        else
        {
            $link_is_enabled = 1;

            $enabled = $class_link->enabledDisabledLink($link_id, $link_is_enabled);

            if($enabled)
            {
                // Define a mensagem de sucesso
                $_SESSION['success_message'] = 'Link ativado!';
                header("Location: " . URL_PATH . "link");
                exit;
            }	    			
        }
    }
}

<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'block_avatar_enabledDisabled') 
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
        $avatar_id = $input_data['avatar_id'] ?? null;
        $avatar_is_enabled = $input_data['avatar_is_enabled'] ?? null;
                
        if($avatar_is_enabled == null || $avatar_is_enabled == 0)
        {	
            $avatar_is_enabled = 0;

            $disabled = $class_block_avatar->enabledDisabledBlockAvatar($link_id, $avatar_id, $avatar_is_enabled);
            
            if($disabled)
            {
                // Define a mensagem de aucesso
                $_SESSION['warning_message'] = 'Bloco Avatar desativado!';
                header("Location: " . URL_PATH . "link/edit/" . $link_id);
                exit;
            }
        }
        else
        {
            $avatar_is_enabled = 1;

            $enabled = $class_block_avatar->enabledDisabledBlockAvatar($link_id, $avatar_id, $avatar_is_enabled);

            if($enabled)
            {
                // Define a mensagem de sucesso
                $_SESSION['success_message'] = 'Bloco Avatar ativado!';
                header("Location: " . URL_PATH . "link/edit/" . $link_id);
                exit;
            }	    			
        }
    }
}

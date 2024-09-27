<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'link_delete') 
{
    if (isset($_POST['token']) && !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        $_SESSION['error_message'] = "Token inválido. Tente novamente.";
        header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
        exit;
    } 
    else 
    {
        // PADRÃO EM TODOS OS FORMULÁRIOS
        $input_data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $user_id = $input_data['user_id'] ?? null;
        $link_id = $input_data['link_id'] ?? null;

        $delete_link = $class_link->deleteLink($link_id);

        if($delete_link)
        {
            $_SESSION['success_message'] = 'Link deletado com sucesso!';
            header("Location: ".URL_PATH."link");
            exit;
        }
        else
        {
            $_SESSION['error_message'] = 'Não foi possível deletar o link!';
            header("Location: ".URL_PATH."link");
            exit;	    			
        }
    }
}

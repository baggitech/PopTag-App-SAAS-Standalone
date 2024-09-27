<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'get_link') 
{
    if (isset($_POST['token']) && !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        $_SESSION['error_message'] = "Token inválido. Tente novamente.";
        header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
        exit;
    } 
    else 
    {
        $input_data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $link_id = $input_data['link_id'] ?? null;

        if(!empty($link_id))
        {
            $create_session_link_id = $class_link->getLinkNameByLinkId($link_id);

            if ($create_session_link_id) 
            {
                header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
                exit;
            } 
            else 
            {
                $_SESSION['error_message'] = "Link não existe!";
                header('Location: ' . URL_PATH . 'link/');
                exit;
            }            
        }
    }
}
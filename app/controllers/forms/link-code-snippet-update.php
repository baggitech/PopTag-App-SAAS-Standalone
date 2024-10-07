<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'link_code_snippet_update') 
{
    if (isset($_POST['token']) && !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        // Define a mensagem de erro e redireciona
        $_SESSION['error_message'] = "Token inválido. Tente novamente.";
        header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
        exit;
    } 
    else 
    {
        // STANDARD ON ALL FORMS
        $input_data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $user_id = $user_id ?? null;
        $link_id = $input_data['link_id'] ?? null;

        // INPUTS DO FORMULÁRIO        
        $custom_css = $input_data['custom_css'] ?? null;
        $custom_body = $input_data['custom_body'] ?? null;
        $custom_js = $input_data['custom_js'] ?? null;


    }
}


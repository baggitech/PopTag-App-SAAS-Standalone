<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'link_snippet_update') 
{
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
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
        $snippet_head = $input_data['snippet_head'] ?? null;
        $snippet_body = $input_data['snippet_body'] ?? null;
        $snippet_footer = $input_data['snippet_footer'] ?? null;

        $snippet_head = htmlentities($snippet_head, ENT_QUOTES, 'UTF-8');
        $snippet_body = htmlentities($snippet_body, ENT_QUOTES, 'UTF-8');
        $snippet_footer = htmlentities($snippet_footer, ENT_QUOTES, 'UTF-8');

        $link_snippet_update = $class_link_snippet->updateLinkSnippets($link_id, $snippet_head, $snippet_body, $snippet_footer);

        if($link_snippet_update)
        {
            // Define a mensagem de erro e redireciona
            $_SESSION['success_message'] = 'Snippets atualizados com sucesso!';
            header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
            exit;
        }
        else
        {
            // Define a mensagem de erro e redireciona
            $_SESSION['error_message'] = 'Snippets não puderam ser atualizadas!';
            header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
            exit;	    			
        }




    }
}


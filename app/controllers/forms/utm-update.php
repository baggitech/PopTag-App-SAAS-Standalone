<?php
if (isset($_POST['form_update_utm']))
{
    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['token'], $_POST['token'])) 
    {
        $error_message = "Token inválido. Tente novamente.";
        $_SESSION['error_message'] = $error_message;
        header("Location: ".URL_PATH."link/edit/".$link_id);
        exit;
    }
    else
    {
        $link_id = filter_input(INPUT_POST, 'link_id', FILTER_SANITIZE_NUMBER_INT);
        $class_slug_convert = new SlugConvert();
        $utm_source = $class_slug_convert->convertingSlug($_POST['utm_source']);
        $utm_medium = $class_slug_convert->convertingSlug($_POST['utm_medium']);
        $utm_campaign = $class_slug_convert->convertingSlug($_POST['utm_campaign']);
        $utm_id = $class_slug_convert->convertingSlug($_POST['utm_id']);
        $utm_term = $class_slug_convert->convertingSlug($_POST['utm_term']);
        $utm_content = $class_slug_convert->convertingSlug($_POST['utm_content']);

        // Filtrar e validar $utm_source
        $filtered_utm_source = filter_var($utm_source, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if ($filtered_utm_source !== $utm_source) 
        {
            // $utm_source contém caracteres inválidos
        }

        // Filtrar e validar $utm_medium
        $filtered_utm_medium = filter_var($utm_medium, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if ($filtered_utm_medium !== $utm_medium) 
        {
            // $utm_medium contém caracteres inválidos
        }

        // Filtrar e validar $utm_campaign
        $filtered_utm_campaign = filter_var($utm_campaign, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if ($filtered_utm_campaign !== $utm_campaign) 
        {
            // $utm_campaign contém caracteres inválidos
        }

        // Filtrar e validar $utm_id
        $filtered_utm_id = filter_var($utm_id, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if ($filtered_utm_id !== $utm_id) 
        {
            // $utm_id contém caracteres inválidos
        }

        // Filtrar e validar $utm_term
        $filtered_utm_term = filter_var($utm_term, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if ($filtered_utm_term !== $utm_term) 
        {
            // $utm_term contém caracteres inválidos
        }

        // Filtrar e validar $utm_content
        $filtered_utm_content = filter_var($utm_content, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if ($filtered_utm_content !== $utm_content) 
        {
            // $utm_content contém caracteres inválidos
        }

        $class_utm_generator = new UTMGenerator();
        $utm_url = $class_utm_generator->generatingUTM($utm_source, $utm_medium, $utm_campaign, $utm_id, $utm_term, $utm_content);

        if (!filter_var($utm_url, FILTER_VALIDATE_URL)) 
        {
            // $utm_content não é uma URL válida
        }

        if($class_link->updateUTM($utm_source, $utm_medium, $utm_campaign, $utm_id, $utm_term, $utm_content, $utm_url, $link_id))
        {

            $success_message = "Atualizado com sucesso!";
            $_SESSION['success_message'] = $success_message;
            header("Location: ".URL_PATH."link/edit/".$link_id);
            exit;
        }
        else
        {
            $error_message = "Erro ao atualizar!";
            $_SESSION['error_message'] = $error_message;
            header("Location: ".URL_PATH."link/edit/".$link_id);
            exit;   
        }

    }
}



    





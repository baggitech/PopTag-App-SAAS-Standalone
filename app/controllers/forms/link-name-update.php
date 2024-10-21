<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'link_name_update') 
{
    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        // Define a mensagem de erro
        $_SESSION['error_message'] = "Token inválido. Tente novamente.";
        header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
        exit;
    } 
    else 
    {
        // STANDARD ON ALL FORMS
        $input_data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $link_id = $input_data['link_id'] ?? null;

        // INPUTS VARIÁVEIS
        $link_name = $input_data['link_name'] ?? null;
        $domain_name = $input_data['domain_name'] ?? null;

        if (empty($link_name)) 
        {
            $class_code_generate = new CodeGenerate();
            $link_name = $class_code_generate->generatingCode(8, false, true, true, false);
        } 
        else 
        {
            if (strlen($link_name) < 8) 
            {
                // Define a mensagem de erro
                $_SESSION['error_message'] = 'Use 8 ou mais caracteres!';
                header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
                exit;
            } 
            else 
            {
                $class_slug_convert = new SlugConvert();
                $link_name = $class_slug_convert->convertingSlug($link_name);
            }
        }

        $link_update = $class_link->linkNameUpdate($link_id, $link_name, $domain_name);

        if ($link_update) 
        {
            // Define a mensagem de sucesso
            $_SESSION['success_message'] = 'Link atualizado com sucesso!';
            header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
            exit;
        } 
        else 
        {
            // Define a mensagem de erro
            $_SESSION['error_message'] = 'Link já existe!';
            header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
            exit;
        }
    }
}

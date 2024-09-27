<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'link_create') 
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
        $user_id = $input_data['user_id'] ?? null;
        $link_name = $input_data['link_name'] ?? null;
        $domain_name = $input_data['domain_name'] ?? null;

        if(empty($link_name))
        {
            $class_code_generate = new CodeGenerate();	
            $link_name = $class_code_generate->generatingCode(8, false, true, true, false);
        }
        else
        {
            if(strlen($link_name) < 8)
            {
                $_SESSION['error_message'] = 'Use 8 ou mais caracteres!';
                header("Location: ".URL_PATH."link");
                exit;
            }
            else
            {	
                $class_slug_convert = new SlugConvert();
                $link_name = $class_slug_convert->convertingSlug($link_name);	
            }
        }

        $link_created = $class_link->linkCreate($user_id, $link_name, $domain_name);

        if($link_created)
        {
            $_SESSION['success_message'] = 'Link criado com sucesso!';
            header("Location: ".URL_PATH."link");
            exit;
        }
        else
        {
            $_SESSION['error_message'] = 'Link já existe!';
            header("Location: ".URL_PATH."link");
            exit;	    			
        }
    }
}

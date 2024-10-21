<?php
// Verifica se houve uma requisição via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) {

        // Define a mensagem de erro de token inválido
        $_SESSION['error_message'] = "Token inválido. Tente novamente.";

        // Redireciona o usuário de volta para a página de edição do link
        header('Location: ' . URL_PATH . 'link/edit/' . $link_id);

        // Encerra o script
        exit;

    } else {
        // Reúne e filtra os dados dos formulários
        $input_data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        // Atribui os dados dos formulários às variáveis
        $link_id = $input_data['link_id'] ?? null; // definido no formulário
        $user_id = $user_id ?? null; // definido no controller correspondente
        $link_name = $input_data['link_name'] ?? null;  // definido no formulário
        $link_type = $input_data['link_type'] ?? null;  // definido no formulário
        $domain = $input_data['domain'] ?? null;  // definido no formulário
        $link_is_enabled = filter_input(INPUT_POST, 'link_is_enabled', FILTER_VALIDATE_BOOLEAN);

        // Tipo de verbo a ser executado
        $verb = $input_data['form_settings_link'] ?? null;

        $settings = json_encode([
            'robots' => $input_data['robots'] ?? '',
            'title' => $input_data['title'] ?? '',
            'meta_description' => $input_data['meta_description'] ?? '',
            'meta_keywords' => $input_data['meta_keywords'] ?? '',
            'favicon_del' => $input_data['favicon_del'] ?? '',

            'font_one' => $input_data['font_one'] ?? '',
            'font_two' => $input_data['font_two'] ?? '',
            'font_three' => $input_data['font_three'] ?? '',
            'number' => $input_data['number'] ?? '',
            'color' => $input_data['color'] ?? '',

            'bg_type' => $input_data['bg_type'] ?? '',
            'bg_id' => $input_data['bg_id'] ?? '',
            'color1' => $input_data['color1'] ?? '',
            'color2' => $input_data['color2'] ?? '',
            'to_direction' => $input_data['to_direction'] ?? '',
            'background_image' => $input_data['background_image'] ?? '',

            'url_disabled' => $input_data['url_disabled'] ?? '',
            'utm_id' => $input_data['utm_id'] ?? '',
            'utm_source' => $input_data['utm_source'] ?? '',
            'utm_medium' => $input_data['utm_medium'] ?? '',
            'utm_campaign' => $input_data['utm_campaign'] ?? '',
            'utm_term' => $input_data['utm_term'] ?? '',
            'utm_content' => $input_data['utm_content'] ?? '',
            'utm_url' => $input_data['utm_url'] ?? '',

            'custom_css' => $input_data['custom_css'] ?? '',
            'custom_body' => $input_data['custom_body'] ?? '',
            'custom_js' => $input_data['custom_js'] ?? '',
            
            'pass_sensitive_content' => $input_data['pass_sensitive_content'] ?? '',
            'sensitive_content' => $input_data['sensitive_content'] ?? ''
        ]);

        switch ($verb) {
            
            case 'view':
                // Responsável carregar os dados do link
                if (!empty($link_id)) 
                {
                    if ($class_link->getLinkJoinsAllTablesByLinkId($link_id)) 
                    {
                        header('Location: '.URL_PATH.'link/edit/'.$link_id);
                        exit;
                    } 
                    else 
                    {
                        $error_message = "Link não existe!";
                        $_SESSION['error_message'] = $error_message;
                        header('Location: '.URL_PATH.'link/');
                        exit;
                    }
                }

                break;

            // -------------------------------------------------------------

            case 'create':
                // Responsável por criar o link
                if(empty($link_name))
                {
                    $class_code_generate = new CodeGenerate();	
                    $link_name = $class_code_generate->generatingCode(8, false, true, true, false);
                }
                else
                {
                    if(strlen($link_name) < 8)
                    {
                     $error_message = "Use 8 ou mais caracteres!";
                     $_SESSION['error_message'] = $error_message;
                     header("Location: ".URL_PATH."link");
                     exit;
                    }
                    else
                    {	
                        $class_slug_convert = new SlugConvert();
                        $link_name = $class_slug_convert->convertingSlug($link_name);	
                    }
                }
             if($class_link->addLink($domain, $link_name))
             {
                 $success_message = "Link criado com sucesso!";
                 $_SESSION['success_message'] = $success_message;
                 header("Location: ".URL_PATH."link");
                 exit;
             }
             else
             {
                 $error_message = "Link já existe!";
                 $_SESSION['error_message'] = $error_message;
                 header("Location: ".URL_PATH."link");
                 exit;	    			
             }

                break;

            // -------------------------------------------------------------

            case 'update':
                // Responsável por atualizar os dados do link
                $update_link = $class_link->updateLink($link_id, $link_name, $domain, $settings);

                // Verifica se a criação do bloco foi bem-sucedida
                if ($update_link) 
                {
                    // Define a mensagem de sucesso
                    $_SESSION['success_message'] = 'Link atualizado com sucesso!';
                    // Redireciona o usuário de volta para a página de edição do link
                    header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
                    // Encerra o script
                    exit;
                } 
                else 
                {
                    // Define a mensagem de erro
                    $_SESSION['error_message'] = 'Não foi possível atualizar o link!';
                    // Redireciona o usuário de volta para a página de edição do link
                    header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
                    // Encerra o script
                    exit;
                }

                break;
        
            // -------------------------------------------------------------

            case 'enabledDisabled':
                // Responsável por ativar e desativar o link
                if($link_is_enabled == 1)
                {	
                    if($class_link->enabledLink($link_id, $link_is_enabled))
                    {
                        $success_message = "Link ativado!";
                        $_SESSION['success_message'] = $success_message;
                        header("Location: ".URL_PATH."link");
                        exit;
                    }
                }
                else
                {
                    if($class_link->enabledLink($link_id, $link_is_enabled))
                    {
                           $error_message = "Link desativado!";
                           $_SESSION['error_message'] = $error_message;
                        header("Location: ".URL_PATH."link");
                        exit;
                    }	    			
                }

                if($link_is_enabled == 1)
                {	
                    if($class_link->enabledLink($link_id, $link_is_enabled))
                    {
                        $success_message = "Link ativado!";
                        $_SESSION['success_message'] = $success_message;
                        header("Location: ".URL_PATH."link/edit/".$link_id);
                        exit;
                    }
                }
                else
                {
                    if($class_link->enabledLink($link_id, $link_is_enabled))
                    {
                           $error_message = "Link desativado!";
                           $_SESSION['error_message'] = $error_message;
                        header("Location: ".URL_PATH."link/edit/".$link_id);
                        exit;
                    }	    			
                }

                break;

            // -------------------------------------------------------------

            case 'delete':
                # Responsável por deletar o link
                if (empty($link_id)) 
                {
                    $error_message = "Dados inválidos. Tente novamente.";
                    $_SESSION['error_message'] = $error_message;
                    header("Location: ".URL_PATH."link");
                    exit;
                }
        
                $link = $class_link->getLinkByLinkId($link_id);
        
                if (!$link || $link['link_id'] != $link_id) 
                {
                    $error_message = "Link não encontrado. Tente novamente.";
                    $_SESSION['error_message'] = $error_message;
                    header("Location: ".URL_PATH."link");
                    exit;
                }
        
                if ($class_link->deleteLink($link_id)) 
                {
                    $_SESSION['link_id'] = "";
                    $success_message = "Link excluído com sucesso!";
                    $_SESSION['success_message'] = $success_message;
                    header("Location: ".URL_PATH."link");
                    exit;
                } 
                else 
                {
                    $error_message = "Erro ao excluir o link. Tente novamente.";
                    $_SESSION['error_message'] = $error_message;
                    header("Location: ".URL_PATH."link");
                    exit;
                }
                break;

            // -------------------------------------------------------------

        }
    }
}

<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'link_seo_update') 
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
        $seo_robots = $input_data['seo_robots'] ?? null;
        $seo_title = $input_data['seo_title'] ?? null;
        $seo_meta_description = $input_data['seo_meta_description'] ?? null;
        $seo_meta_keywords = $input_data['seo_meta_keywords'] ?? null;
        $seo_favicon = $_FILES['seo_favicon'] ?? null;
        $seo_favicon_del = $input_data['seo_favicon_del'] ?? null;

        // SANITIZA E VALIDA O ARQUIVO DE IMAGEM
        $path = basename(filter_var($_FILES['seo_favicon']['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $path_tmp = filter_var($_FILES['seo_favicon']['tmp_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $mime = filter_var($_FILES['seo_favicon']['type'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // GERENCIADOR DE FAVICON
        if (empty($path)) 
        {
            // Obtém o favicon atual do SEO
            $current_image = $data['link_seo']['seo_favicon'];
            
            // Se o favicon atual for o padrão, mantém; caso contrário, mantém o favicon atual
            if($current_image == 'default.png')
            {
                $seo_favicon = $current_image;
            }
            else
            {
                $seo_favicon = $data['link_seo']['seo_favicon'];
            } 
        } 
        else 
        {
            // Verifica se o arquivo é uma imagem válida e se os caminhos não estão vazios
            $is_valid_file = !empty($path) && !empty($path_tmp) && in_array($mime, ['image/jpeg', 'image/png', 'image/gif']);
        
            // Se o arquivo for válido
            if ($is_valid_file) 
            {
                // Mapeia os tipos MIME para suas extensões de arquivo correspondentes
                $mimeToExt = [
                    'image/jpeg' => 'jpeg',
                    'image/png' => 'png',
                    'image/gif' => 'gif',
                ];
        
                // Obtém a extensão correspondente ao MIME atual
                $ext = $mimeToExt[$mime] ?? '';
        
                // Obtém o nome do link
                $link_name = $data['link']['link_name'];
        
                // Cria o nome do arquivo favicon com base no nome do link e na extensão do arquivo
                $seo_favicon = $link_name . '.' . $ext;
        
                // Define o caminho local para salvar o favicon
                $local = (__DIR__ . '/../../../biolink/uploads/favicon/');
        
                // Verifica se já existe um arquivo com o mesmo nome e extensão
                if (file_exists($local . $seo_favicon)) 
                {
                    // Tenta substituir o arquivo existente pelo novo
                    if (!move_uploaded_file($path_tmp, $local . $seo_favicon)) 
                    {
                        // Define a mensagem de erro
                        $_SESSION['error_message'] = 'Falha ao mover o arquivo!';
                        header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
                        exit;
                    }
                } 
                else 
                {
                    // Verifica se já existe um arquivo com o mesmo nome mas com extensão diferente
                    foreach ($mimeToExt as $existing_mime => $existing_ext) 
                    {
                        if (file_exists($local . $link_name . '.' . $existing_ext)) 
                        {
                            // Deleta o arquivo existente com extensão diferente
                            unlink($local . $link_name . '.' . $existing_ext);
                        }
                    }
        
                    // Move o novo arquivo para o local desejado
                    if (!move_uploaded_file($path_tmp, $local . $seo_favicon)) 
                    {
                        // Define a mensagem de erro
                        $_SESSION['error_message'] = 'Falha ao mover o arquivo!';
                        header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
                        exit;
                    }
                }
            } 
            else 
            {
                // Define a mensagem de erro
                $_SESSION['error_message'] = 'Tipo de arquivo não aceito!';
                header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
                exit;
            }
        }
        
        // DELETA FAVICON ATUAL E SUBSTITUI PELO DEFAULT
        if ($seo_favicon_del == 'delete_favicon') 
        {
            $seo_favicon = 'default.png';
        }

        $link_seo_update = $class_link_seo->linkSeoUpdate($link_id, $seo_robots, $seo_title, $seo_meta_description, $seo_meta_keywords, $seo_favicon);

        if($link_seo_update)
        {
            // Define a mensagem de erro e redireciona
            $_SESSION['success_message'] = 'Seo atualizado com sucesso!';
            header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
            exit;
        }
        else
        {
            // Define a mensagem de erro e redireciona
            $_SESSION['error_message'] = 'Seo não pode ser atualizado!';
            header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
            exit;	    			
        }
    }
}

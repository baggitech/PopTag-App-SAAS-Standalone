<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'block_avatar_create') 
{
    // Verifica se o token CSRF é válido
    if (isset($_POST['token']) && !hash_equals($_SESSION['csrf_token'], $_POST['token'])) {

        // Define a mensagem de erro de token inválido
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
        $avatar_height = $input_data['avatar_height'] ?? null;
        $avatar_width = $input_data['avatar_width'] ?? null;
        $avatar_border_radius = $input_data['avatar_border_radius'] ?? null;
        $avatar_image = $_FILES['avatar_image'] ?? null;

        // SANITIZA E VALIDA O ARQUIVO DE IMAGEM
        $path = basename(filter_var($_FILES['avatar_image']['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $path_tmp = filter_var($_FILES['avatar_image']['tmp_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $mime = filter_var($_FILES['avatar_image']['type'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Verifica se uma imagem foi enviada
        if (empty($path)) 
        {
            // Define a mensagem de erro
            $_SESSION['error_message'] = 'Tem que ter uma imagem!';
            header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
            exit;
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
                $avatar_image = 'avatar-' . $link_name . '.' . $ext;

                // Define o caminho local para salvar o favicon
                $local = (__DIR__ . '/../../../uploads/biolink/');

                // Verifica se já existe um arquivo com o mesmo nome e extensão
                if (file_exists($local . $avatar_image)) 
                {
                    // Tenta substituir o arquivo existente pelo novo
                    if (!move_uploaded_file($path_tmp, $local . $avatar_image)) 
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
                        if (file_exists($local . 'avatar-' . $link_name . '.' . $existing_ext)) 
                        {
                            // Deleta o arquivo existente com extensão diferente
                            unlink($local . 'avatar-' . $link_name . '.' . $existing_ext);
                        }
                    }

                    // Move o novo arquivo para o local desejado
                    if (!move_uploaded_file($path_tmp, $local . $avatar_image)) 
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

        $block_type = 'avatar';
        $create_block = $class_blocks->createBlock($link_id, $block_type);

        if ($create_block) 
        {
            // Cria o bloco no banco com os dados coletados
            $create_block_avatar = $class_block_avatar->createBlockAvatar($link_id, $avatar_height, $avatar_width, $avatar_border_radius, $avatar_image);

            // Verifica se a criação do bloco foi bem-sucedida
            if ($create_block_avatar) 
            {
                // Define a mensagem de sucesso
                $_SESSION['success_message'] = 'Avatar criado com sucesso!';
                header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
                exit;
            } 
            else 
            {
                // Define a mensagem de erro
                $_SESSION['error_message'] = 'Não foi possível criar o avatar!';
                header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
                exit;
            }
        }
        else
        {
            // Define a mensagem de erro
            $_SESSION['error_message'] = 'Quantidade de avatar atingida!';
            header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
            exit;            
        }


    }
}

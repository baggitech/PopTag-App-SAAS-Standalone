<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'block_avatar_update') 
{
    // Verifica se o token CSRF é válido
    if (isset($_POST['token']) && !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        // Define a mensagem de erro
        $_SESSION['error_message'] = "Token inválido. Tente novamente.";
        header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
        exit;
        
    } else {
        // PADRÃO EM TODOS OS FORMULÁRIOS
        $input_data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $link_id = $input_data['link_id'] ?? null;

        // INPUTS VARIÁVEIS
        $avatar_id = $input_data['avatar_id'] ?? null;
        $avatar_image = $input_data['avatar_image'] ?? null;
        $avatar_image_alt = $input_data['avatar_image_alt'] ?? null;
        $avatar_location_url = $input_data['avatar_location_url'] ?? null;
        $avatar_target_link = $input_data['avatar_target_link'] ?? null;
        $avatar_height = $input_data['avatar_height'] ?? null;
        $avatar_width = $input_data['avatar_width'] ?? null;
        $avatar_border_radius = $input_data['avatar_border_radius'] ?? null;
        $avatar_border_shadow_offset_x = $input_data['avatar_border_shadow_offset_x'] ?? null;
        $avatar_border_shadow_offset_y = $input_data['avatar_border_shadow_offset_y'] ?? null;
        $avatar_border_shadow_blur = $input_data['avatar_border_shadow_blur'] ?? null;
        $avatar_border_shadow_spread = $input_data['avatar_border_shadow_spread'] ?? null;
        $avatar_border_shadow_color = $input_data['avatar_border_shadow_color'] ?? null;
        $avatar_border_width = $input_data['avatar_border_width'] ?? null;
        $avatar_border_style = $input_data['avatar_border_style'] ?? null;
        $avatar_border_color = $input_data['avatar_border_color'] ?? null;
        $avatar_object_fit = $input_data['avatar_object_fit'] ?? null;
        $avatar_created_at = $input_data['avatar_created_at'] ?? null;
        $avatar_updated_at = $input_data['avatar_updated_at'] ?? null;

        // SANITIZA E VALIDA O ARQUIVO DE IMAGEM
        $path = basename(filter_var($_FILES['avatar_image']['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $path_tmp = filter_var($_FILES['avatar_image']['tmp_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $mime = filter_var($_FILES['avatar_image']['type'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Verifica se uma imagem foi enviada
        if (empty($path)) {
            // Obtém o avatar atual
            $current_image = $data['block_avatar']['avatar_image'];

            // Se o avatar atual for o padrão, mantém; caso contrário, mantém o avatar atual
            if ($current_image == 'default.png') {
                $avatar_image = $current_image;
            } else {
                $avatar_image = $data['block_avatar']['avatar_image'];
            }
        } else {
            // Verifica se o arquivo é uma imagem válida e se os caminhos não estão vazios
            $is_valid_file = !empty($path) && !empty($path_tmp) && in_array($mime, ['image/jpeg', 'image/png', 'image/gif']);

            // Se o arquivo for válido
            if ($is_valid_file) {

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
                $avatar_image = $link_name . '.' . $ext;

                // Define o caminho local para salvar o favicon
                $local = (__DIR__ . '/../../../biolink/uploads/avatar/');

                // Verifica se já existe um arquivo com o mesmo nome e extensão
                if (file_exists($local . $avatar_image)) {
                    // Tenta substituir o arquivo existente pelo novo
                    if (!move_uploaded_file($path_tmp, $local . $avatar_image)) {
                        // Define a mensagem de erro
                        $_SESSION['error_message'] = 'Falha ao mover o arquivo!';
                        header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
                        exit;
                    }
                } else {
                    // Verifica se já existe um arquivo com o mesmo nome mas com extensão diferente
                    foreach ($mimeToExt as $existing_mime => $existing_ext) {
                        if (file_exists($local . $link_name . '.' . $existing_ext)) {
                            // Deleta o arquivo existente com extensão diferente
                            unlink($local . $link_name . '.' . $existing_ext);
                        }
                    }

                    // Move o novo arquivo para o local desejado
                    if (!move_uploaded_file($path_tmp, $local . $avatar_image)) {
                        // Define a mensagem de erro
                        $_SESSION['error_message'] = 'Falha ao mover o arquivo!';
                        header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
                        exit;
                    }
                }
            } else {
                // Define a mensagem de erro
                $_SESSION['error_message'] = 'Tipo de arquivo não aceito!';
                header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
                exit;
            }
        }


        // atualiza o bloco no banco com os dados coletados
        $update_block_avatar = $class_block_avatar->updateBlockAvatar(
            $link_id,
            $avatar_id,
            $avatar_image,
            $avatar_image_alt,
            $avatar_location_url,
            $avatar_target_link,
            $avatar_height,
            $avatar_width,
            $avatar_border_radius,
            $avatar_border_shadow_offset_x,
            $avatar_border_shadow_offset_y,
            $avatar_border_shadow_blur,
            $avatar_border_shadow_spread,
            $avatar_border_shadow_color,
            $avatar_border_width,
            $avatar_border_style,
            $avatar_border_color,
            $avatar_object_fit
        );

        // Verifica se a criação do bloco foi bem-sucedida
        if ($update_block_avatar) {
            // Define a mensagem de sucesso
            $_SESSION['success_message'] = 'Avatar atualizado com sucesso!';
            header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
            exit;
        } else {
            // Define a mensagem de erro
            $_SESSION['error_message'] = 'Não foi possível atualizar o avatar!';
            header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
            exit;
        }
    }
}

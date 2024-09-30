<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'block_avatar_delete') 
{
    // Verifica se o token CSRF é válido
    if (isset($_POST['token']) && !hash_equals($_SESSION['csrf_token'], $_POST['token'])) {

        // Define a mensagem de erro
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
        $block_id = $input_data['block_id'] ?? null;
        $avatar_id = $input_data['avatar_id'] ?? null;
        $avatar_image = $input_data['avatar_image'] ?? null;

        // Verifica se uma imagem foi enviada
        if (!empty($avatar_image)) 
        {
            # Responsável por deletar o bloco
            $delete_block = $class_blocks->deleteBlock($block_id);

            $delete_block_avatar = $class_block_avatar->deleteBlockAvatar($avatar_id);

            if ($delete_block) 
            {
                // Caminho absoluto para o arquivo de imagem a ser excluído
                $filePath = __DIR__ . '/../../../biolink/uploads/avatar/' . $avatar_image;

                if (file_exists($filePath)) 
                {
                    unlink($filePath);
                }
            }

            // Define a mensagem de sucesso
            $_SESSION['success_message'] = 'Bloco excluído com sucesso.';
            header("Location: " . URL_PATH . "link/edit/" . $link_id);
            exit;
        } 
        else 
        {
            // Define a mensagem de erro
            $_SESSION['error_message'] = 'Erro ao tentar excluir o bloco.';
            header("Location: " . URL_PATH . "project");
            exit;
        }
    }
}

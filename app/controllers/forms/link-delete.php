<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'link_delete') 
{
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        $_SESSION['error_message'] = "Token inválido. Tente novamente.";
        header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
        exit;
    } 
    else 
    {
        // PADRÃO EM TODOS OS FORMULÁRIOS
        $input_data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $link_id = $input_data['link_id'] ?? null;

        // PEGA O NOME DA IMAGEM
        $avatar_image = $data['block_avatar']['avatar_image'];

        // DELETA O AVATAR SE EXISTIR
        if($avatar_image !== null)
        {
            // Caminho absoluto para o arquivo de imagem a ser excluído
            $filePath = __DIR__ . '/../../../biolink/uploads/avatar/' . $avatar_image;
            if (file_exists($filePath)) 
            {
                unlink($filePath);
            }	
        }

        // PEGA O NOME DA IMAGEM
        $background_image = $data['link_background']['background_image'];

        // DELETA O BACKGROUND SE EXISTIR
        if($background_image !== null)
        {
            // Caminho absoluto para o arquivo de imagem a ser excluído
            $filePath = __DIR__ . '/../../../biolink/uploads/background/' . $background_image;
            if (file_exists($filePath)) 
            {
                unlink($filePath);
            }	
        }

        $delete_link = $class_link->deleteLink($link_id);

        if($delete_link)
        {
            $_SESSION['success_message'] = 'Link deletado com sucesso!';
            header("Location: ".URL_PATH."link");
            exit;
        }
        else
        {
            $_SESSION['error_message'] = 'Não foi possível deletar o link!';
            header("Location: ".URL_PATH."link");
            exit;	    			
        }
    }
}

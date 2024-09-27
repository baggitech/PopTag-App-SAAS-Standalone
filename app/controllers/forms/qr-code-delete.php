<?php
if (isset($_POST['form_qrcode_delete']))
{
    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        // Se o token CSRF não é válido, retorna uma mensagem 
        // de erro e redireciona para a página de QR Code
        $error_message = "Ocorreu um erro de segurança. Por favor, tente novamente.";
        $_SESSION['error_message'] = $error_message;
        header("Location: ".URL_PATH."qrcode");
        exit;
    }
    else
    {
        // Obtém o ID do QR Code a ser excluído
        $qrcode_id = filter_input(INPUT_POST, 'qrcode_id', FILTER_SANITIZE_NUMBER_INT);
        $qrcode_image = filter_input(INPUT_POST, 'qrcode_image', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Verifica se o ID do QR Code é válido
        if (empty($qrcode_id)) 
        {
            // Se o ID do QR Code é inválido, retorna uma mensagem 
            // de erro e redireciona para a página de QR Code
            $error_message = "O ID do QR Code é inválido. Por favor, tente novamente.";
            $_SESSION['error_message'] = $error_message;
            header("Location: ".URL_PATH."qrcode");
            exit;
        }

        // Obtém o QR Code correspondente ao ID
        $qrcode = $class_qrcode->getQRCodeByQRCodeId($qrcode_id);

        // Verifica se o QR Code foi encontrado
        if (!$qrcode)
        {
            // Se o QR Code não foi encontrado, retorna uma mensagem 
            // de erro e redireciona para a página de QR Code
            $error_message = "O QR Code selecionado não foi encontrado. Por favor, tente novamente.";
            $_SESSION['error_message'] = $error_message;
            header("Location: ".URL_PATH."qrcode");
            exit;
        }

        // Tenta excluir o QR Code
        $qrcode_deleted = $class_qrcode->deleteQRCode($qrcode_id);

        // Verifica se a exclusão foi bem-sucedida
        if (!$qrcode_deleted) 
        {
            // Se a exclusão falhou, retorna uma mensagem de erro e 
            // redireciona para a página de QR Code
            $error_message = "Ocorreu um erro ao excluir o QR Code. Por favor, tente novamente.";
            $_SESSION['error_message'] = $error_message;
            header("Location: ".URL_PATH."qrcode");
            exit;
        }

        // Caminho absoluto para o arquivo de imagem a ser excluído
        $filePath = __DIR__ . '/../../../public_html/uploads/biolinks/qrcodes/' . $qrcode_image;

        // Verifica se o arquivo existe antes de tentar excluir
        if (file_exists($filePath)) 
        {
            if(unlink($filePath)) 
            {
                $success_message = "O arquivo foi excluído com sucesso.";
                $_SESSION['success_message'] = $success_message;
                header("Location: ".URL_PATH."qrcode");
                exit;
            } 
            else 
            {
                $error_message = "Não foi possível excluir o arquivo.";
                $_SESSION['error_message'] = $error_message;
                header("Location: ".URL_PATH."qrcode");
                exit;
            }
        } 
        else 
        {
            $error_message = "O arquivo não existe.";
            $_SESSION['error_message'] = $error_message;
            header("Location: ".URL_PATH."qrcode");
            exit;
        }

        // Se a exclusão foi bem-sucedida, retorna uma mensagem de 
        // sucesso e redireciona para a página de QR Code
        $success_message = "QR Code excluído com sucesso!";
        $_SESSION['success_message'] = $success_message;
        header("Location: ".URL_PATH."qrcode");
        exit;        
    }
}

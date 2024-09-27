<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'qr-code-pdf') 
{
    if (isset($_POST['token']) && !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
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

        $qrcode_id = $input_data['qrcode_id'] ?? null;
        $qrcode_type = $input_data['qrcode_type'] ?? null;
        $file_pdf = $_FILES['file_pdf'] ?? null;

        $file_name = basename(filter_var($_FILES['file_pdf']['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $file_tmp_name = filter_var($_FILES['file_pdf']['tmp_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $file_type = filter_var($_FILES['file_pdf']['type'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $file_size = filter_var($_FILES['file_pdf']['size'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Verificar se um arquivo PDF foi enviado
        if (!empty($file_name) && $_FILES['file_pdf']['error'] == UPLOAD_ERR_OK) 
        {








            
            // Verificar o tipo de arquivo permitido (adicionar mais tipos se necessário)
            $allowed_types = array('application/pdf');

            if (!in_array($file_type, $allowed_types, true)) 
            {
                // Se o arquivo não for um arquivo PDF válido, exibir uma mensagem de erro
                $error_message = "O arquivo deve ser um arquivo PDF.";
                $_SESSION['error_message'] = $error_message;
                header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                exit;
            }

            // Verificar o tamanho máximo do arquivo (exemplo: 10 MB)
            $max_file_size = 10 * 1024 * 1024; // 10 MB em bytes

            if ($file_size === false || $file_size > $max_file_size) 
            {
                // Se o arquivo exceder o tamanho máximo, exibir uma mensagem de erro
                $error_message = "O tamanho do arquivo deve ser no máximo 10 MB.";
                $_SESSION['error_message'] = $error_message;
                header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                exit;
            }

            // Definir o diretório de destino para o arquivo PDF
            $target_dir = __DIR__ . "/../../../uploads/qrcode/";

            // Gera uma string hexadecimal aleatória de 32 caracteres
            $pdf_name = bin2hex(random_bytes(16));

            // Filtragem e validação do nome do arquivo
            $pdf_name = filter_var($pdf_name, FILTER_SANITIZE_SPECIAL_CHARS);

            // Concatena o nome do arquivo com a extensão (.pdf)
            $pdf_name .= ".pdf";

            // Obter o nome do arquivo PDF e o caminho completo                    
            $target_file = $target_dir . $pdf_name;

            // Mover o arquivo PDF para o diretório de destino
            if (move_uploaded_file($file_tmp_name, $target_file)) 
            {
                // ... (start código adicional)

                // Verificar o formato do arquivo PDF
                // Adicione aqui as validações adicionais que você precisa realizar para arquivos PDF

                // ... (end código adicional) ...

                // Se o upload for bem-sucedido, retornar a URL do arquivo PDF
                $url = URL_PATH . urlencode("uploads/" . $pdf_name);
                $qrcode_fields = "URL:$url";
            } 
            else 
            {
                // Se houver um erro ao mover o arquivo, exibir uma mensagem de erro
                $_SESSION['error_message'] = 'Ocorreu um erro ao enviar o arquivo PDF.';
                header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                exit;
            }
        } 
        else 
        {
            // Se nenhum arquivo PDF válido foi enviado, exibir uma mensagem de erro
            $_SESSION['error_message'] = 'Nenhum arquivo PDF válido foi enviado.';
            header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
            exit;
        }
    }
}

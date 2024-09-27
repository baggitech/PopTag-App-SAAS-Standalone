<?php
if (isset($_POST['form_qrcode_update'])) {
    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) {
        $error_message = "Token inválido. Tente novamente.";
        $_SESSION['error_message'] = $error_message;
        header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
        exit;
    } else {
        $qrcode_id = filter_input(INPUT_POST, 'qrcode_id', FILTER_SANITIZE_NUMBER_INT);
        $qrcode_type = filter_input(INPUT_POST, 'qrcode_type', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        switch ($qrcode_type) {

                // -------------------------------------------------------------

            case 'email':
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $full_email = $email . ':' . $subject . ':' . $message;
                $qrcode_fields = "SMTP:$full_email";
                break;

                // -------------------------------------------------------------

            case 'facebook':
                $url = filter_input(INPUT_POST, "fb-url", FILTER_SANITIZE_URL);
                $type = filter_input(INPUT_POST, "type", FILTER_SANITIZE_SPECIAL_CHARS);
                if ($url && $type) {
                    if ($type == "fb-url") 
                    {
                        // Gerar código QR para a URL inserida
                        $qrcode_fields = "URL:$url";
                    } 
                    else 
                    {
                        // Gerar código QR para uma URL que compartilha a URL inserida no Facebook
                        $qrcode_fields = "https://www.facebook.com/sharer/sharer.php?u=" . urlencode($url);
                    }
                } 
                else 
                {
                    // Tratar erro de entrada inválida
                    $error_message = "Erro ao atualizar!";
                    $_SESSION['error_message'] = $error_message;
                    header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                    exit;
                }
                break;

                // -------------------------------------------------------------

            case 'location':
                $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $latitude = filter_input(INPUT_POST, 'latitude', FILTER_VALIDATE_FLOAT, array(
                    'options' => array(
                        'min_range' => -90,
                        'max_range' => 90
                    )
                ));
                $longitude = filter_input(INPUT_POST, 'longitude', FILTER_VALIDATE_FLOAT, array(
                    'options' => array(
                        'min_range' => -180,
                        'max_range' => 180
                    )
                ));
                $full_address = 'http://maps.google.com/maps?f=q&q=' . $latitude . ',' . $longitude;
                $qrcode_fields = "URL:$full_address";
                break;

                // -------------------------------------------------------------

            case 'mp3':
                // Verificar se um arquivo de áudio foi enviado
                if (isset($_FILES['audio']) && $_FILES['audio']['error'] == UPLOAD_ERR_OK) {
                    // Obtém informações sobre o arquivo de áudio enviado, como nome, 
                    // tipo, tamanho e local temporário no servidor:
                    $file_name = $_FILES['audio']['name'];
                    $file_type = $_FILES['audio']['type'];
                    $file_size = $_FILES['audio']['size']; // Tamanho do arquivo em bytes
                    $file_tmp_name = $_FILES['audio']['tmp_name'];

                    // Verificar o tipo de arquivo permitido (adicionar mais tipos se necessário)
                    $allowed_types = array('audio/mpeg', 'audio/mp3');
                    if (!in_array($file_type, $allowed_types, true)) {
                        // Se o arquivo não for um arquivo MP3 válido, exibir uma mensagem de erro
                        $error_message = "O arquivo deve ser um arquivo MP3.";
                        $_SESSION['error_message'] = $error_message;
                        header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                        exit;
                    }

                    // Verificar o tamanho máximo do arquivo (exemplo: 10 MB)
                    $max_file_size = 10 * 1024 * 1024; // 10 MB em bytes
                    if ($file_size === false || $file_size > $max_file_size) {
                        // Se o arquivo exceder o tamanho máximo, exibir uma mensagem de erro
                        $error_message = "O tamanho do arquivo deve ser no máximo 10 MB.";
                        $_SESSION['error_message'] = $error_message;
                        header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                        exit;
                    }

                    // Definir o diretório de destino para o arquivo de áudio
                    $target_dir = __DIR__ . "/../../../public/uploads/";

                    // Gera uma string hexadecimal aleatória de 32 caracteres
                    $audio_name = bin2hex(random_bytes(16));

                    // Filtragem e validação do nome do arquivo
                    $audio_name = filter_var($audio_name, FILTER_SANITIZE_SPECIAL_CHARS);

                    // Concatena o nome do arquivo com a extensão (.mp3)
                    $audio_name .= ".mp3";

                    // Obter o nome do arquivo de áudio e o caminho completo                    
                    $target_file = $target_dir . $audio_name;

                    // Mover o arquivo de áudio para o diretório de destino
                    if (move_uploaded_file($file_tmp_name, $target_file)) {

                        // ... (start código adicional)

                        // Verificar o formato do arquivo de áudio
                        $class_validate_str = new ValidateGetID3();
                        if ($file_info = $class_validate_str->validatingGetID3($target_file)) {
                            // O arquivo é um arquivo de áudio MP3 válido
                        } else {
                            // O arquivo não é um arquivo de áudio MP3 válido
                            $error_message = "O arquivo deve ser um arquivo MP3 válido.";
                            $_SESSION['error_message'] = $error_message;
                            header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                            exit;
                        }

                        // Lê o conteúdo do arquivo de áudio
                        $uploaded_file = file_get_contents($target_file);

                        // Calcula o hash MD5 antes do upload 
                        $md5_before_upload = md5($uploaded_file);

                        // Lê novamente o conteúdo do arquivo após o processamento
                        $processed_file = file_get_contents($target_file);

                        // Calcula o hash MD5 após o processamento 
                        $md5_after_processing = md5($processed_file);

                        // Se os hashes antes e depois do processamento forem diferentes 
                        if ($md5_before_upload !== $md5_after_processing) {
                            // exibe uma mensagem de erro
                            $error_message = "O arquivo de áudio não foi transferido corretamente ou foi modificado durante o processo.";
                            $_SESSION['error_message'] = $error_message;
                            header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                            exit;
                        }

                        // ... (end código adicional) ...

                        // Se o upload for bem-sucedido, retornar a URL do arquivo de áudio
                        $url = URL_PATH . urlencode("uploads/" . $audio_name);
                        $qrcode_fields = "URL:$url";
                    } else {
                        // Se houver um erro ao mover o arquivo, exibir uma mensagem de erro
                        $error_message = "Ocorreu um erro ao enviar o arquivo de áudio.";
                        $_SESSION['error_message'] = $error_message;
                        header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                        exit;
                    }
                } else {
                    // Se nenhum arquivo de áudio válido foi enviado, exibir uma mensagem de erro
                    $error_message = "Nenhum arquivo de áudio válido foi enviado.";
                    $_SESSION['error_message'] = $error_message;
                    header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                    exit;
                }
                break;

                // -------------------------------------------------------------

            case 'pdf':
                // Verificar se um arquivo PDF foi enviado
                if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] == UPLOAD_ERR_OK) {
                    // Obtém informações sobre o arquivo PDF enviado, como nome, tipo, tamanho e local temporário no servidor:
                    $file_name = $_FILES['pdf']['name'];
                    $file_type = $_FILES['pdf']['type'];
                    $file_size = $_FILES['pdf']['size']; // Tamanho do arquivo em bytes
                    $file_tmp_name = $_FILES['pdf']['tmp_name'];

                    // Verificar o tipo de arquivo permitido (adicionar mais tipos se necessário)
                    $allowed_types = array('application/pdf');
                    if (!in_array($file_type, $allowed_types, true)) {
                        // Se o arquivo não for um arquivo PDF válido, exibir uma mensagem de erro
                        $error_message = "O arquivo deve ser um arquivo PDF.";
                        $_SESSION['error_message'] = $error_message;
                        header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                        exit;
                    }

                    // Verificar o tamanho máximo do arquivo (exemplo: 10 MB)
                    $max_file_size = 10 * 1024 * 1024; // 10 MB em bytes
                    if ($file_size === false || $file_size > $max_file_size) {
                        // Se o arquivo exceder o tamanho máximo, exibir uma mensagem de erro
                        $error_message = "O tamanho do arquivo deve ser no máximo 10 MB.";
                        $_SESSION['error_message'] = $error_message;
                        header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                        exit;
                    }

                    // Definir o diretório de destino para o arquivo PDF
                    $target_dir = __DIR__ . "/../../../public/uploads/";

                    // Gera uma string hexadecimal aleatória de 32 caracteres
                    $pdf_name = bin2hex(random_bytes(16));

                    // Filtragem e validação do nome do arquivo
                    $pdf_name = filter_var($pdf_name, FILTER_SANITIZE_SPECIAL_CHARS);

                    // Concatena o nome do arquivo com a extensão (.pdf)
                    $pdf_name .= ".pdf";

                    // Obter o nome do arquivo PDF e o caminho completo                    
                    $target_file = $target_dir . $pdf_name;

                    // Mover o arquivo PDF para o diretório de destino
                    if (move_uploaded_file($file_tmp_name, $target_file)) {
                        // ... (start código adicional)

                        // Verificar o formato do arquivo PDF
                        // Adicione aqui as validações adicionais que você precisa realizar para arquivos PDF

                        // ... (end código adicional) ...

                        // Se o upload for bem-sucedido, retornar a URL do arquivo PDF
                        $url = URL_PATH . urlencode("uploads/" . $pdf_name);
                        $qrcode_fields = "URL:$url";
                    } else {
                        // Se houver um erro ao mover o arquivo, exibir uma mensagem de erro
                        $error_message = "Ocorreu um erro ao enviar o arquivo PDF.";
                        $_SESSION['error_message'] = $error_message;
                        header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                        exit;
                    }
                } else {
                    // Se nenhum arquivo PDF válido foi enviado, exibir uma mensagem de erro
                    $error_message = "Nenhum arquivo PDF válido foi enviado.";
                    $_SESSION['error_message'] = $error_message;
                    header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                    exit;
                }
                break;

                // -------------------------------------------------------------

            case 'pix':
                // Verifique a escolha do usuário (CPF, email ou celular)
                $pix_type = isset($_POST['pix_type']) ? $_POST['pix_type'] : '';
                $pix_type = filter_var($pix_type, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $class_validate_pix = new ValidatePix();

                switch ($pix_type) 
                {
                    case 'cpf':
                        // Lógica para obter o CPF do usuário
                        $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
                        $cpf = filter_var($cpf, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        $cpfTratado = $class_validate_pix->validatingCPF($cpf);
                        if ($cpfTratado) 
                        {
                            $key = $cpfTratado;
                        } 
                        else 
                        {
                            $error_message = "CPF inválido.";
                            $_SESSION['error_message'] = $error_message;
                            header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                            exit;
                        }
                        break;

                    case 'cnpj':
                        // Lógica para obter o CPF do usuário
                        $cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : '';
                        $cnpj = filter_var($cnpj, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        $cnpjTratado = $class_validate_pix->validatingCNPJ($cnpj);
                        if ($cnpjTratado) {
                            $key = $cnpjTratado;
                        } else {
                            $error_message = "CNPJ inválido.";
                            $_SESSION['error_message'] = $error_message;
                            header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                            exit;
                        }
                        break;

                    case 'email':
                        // Lógica para obter o email do usuário
                        $email = isset($_POST['email']) ? $_POST['email'] : '';
                        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                        $key = $email;
                        break;

                    case 'celular':
                        // Lógica para obter o celular do usuário
                        $cellPhone = isset($_POST['cellPhone']) ? $_POST['cellPhone'] : '';
                        $cellPhone = filter_var($cellPhone, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        $cellPhoneFormatted = $class_validate_pix->validatingCellPhone($cellPhone);

                        if ($cellPhoneFormatted) {
                            $key = $cellPhoneFormatted;
                        } else {
                            $error_message = "Invalid cell phone number!";
                            $_SESSION['error_message'] = $error_message;
                            header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
                            exit;
                        }
                        break;

                    default:
                        // Opção inválida
                        echo 'Opção inválida';
                        exit;
                }

                // Formate a chave e o value no formato esperado para o PIX
                $pixKey = $key;

                $description = isset($_POST['description']) ? $_POST['description'] : '';
                $description = filter_var($description, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $descriptionFormatted = $class_validate_pix->sanitizeDescription($description);
                $description = $descriptionFormatted;

                $merchantName = isset($_POST['name']) ? $_POST['name'] : '';
                $merchantName = filter_var($merchantName, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $merchantNameFormatted = $class_validate_pix->sanitizeMerchantName($merchantName);
                $merchantName = $merchantNameFormatted;

                $merchantCity = isset($_POST['city']) ? $_POST['city'] : '';
                $merchantCity = filter_var($merchantCity, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $merchantCityFormatted = $class_validate_pix->sanitizeMerchantCity($merchantCity);
                $merchantCity = $merchantCityFormatted;

                $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
                $amount = filter_var($amount, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $amountFormatted = $class_validate_pix->sanitizeAmount($amount);
                $amount = $amountFormatted;

                $txId = isset($_POST['id']) ? $_POST['id'] : '';
                $txId = filter_var($txId, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $class_payload_pix = new PayLoadPix();
                
                $function_payload_pix = $class_payload_pix->setPixKey($pixKey);
                $function_payload_pix = $class_payload_pix->setDescription($description);
                $function_payload_pix = $class_payload_pix->setMerchantName($merchantName);
                $function_payload_pix = $class_payload_pix->setMerchantCity($merchantCity);
                $function_payload_pix = $class_payload_pix->setAmount($amount);
                $function_payload_pix = $class_payload_pix->setTxId($txId);

                $pix = $class_payload_pix->getPayLoad();
                $qrcode_fields = $pix;

                // echo "<pre>";
                // var_dump($qrcode_fields);
                // echo "</pre>";
                // die();

                //$qrcode_fields = "$pix";

                break;

                // -------------------------------------------------------------

            case 'sms':

                break;

                // -------------------------------------------------------------

            case 'text':

                break;

                // -------------------------------------------------------------

            case 'twitter':

                break;

                // -------------------------------------------------------------

            case 'vcard':

                break;

                // -------------------------------------------------------------

            case 'url':

                break;

                // -------------------------------------------------------------

            case 'wifi':

                break;

                // -------------------------------------------------------------

            default:
                $qrcode_fields = 'QR Code Vazio 2!';
                break;

                // -------------------------------------------------------------

        }

        if (empty($qrcode_id)) {
            $error_message = "Erro ao atualizar!";
            $_SESSION['error_message'] = $error_message;
            header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
            exit;
        } else {
            // Obtém a imagem PNG correspondente ao ID
            $qrcode_filename = $class_qrcode->getQRCodeByQRCodeId($qrcode_id);
            $qrcode_filename = $qrcode_filename['qrcode_image'];
            $qrcode_image = explode('.', $qrcode_filename);
            $qrcode_image = $qrcode_image[0];

            // Gera um QR Code usando a classe QRCodeGenerate
            $class_qrcode_generate = new QRCodeGenerate();
            $qrcode_generated = $class_qrcode_generate->generatingQRCode($qrcode_image, $qrcode_fields);

            $class_qrcode->setQRCodeUpdate($qrcode_id, $qrcode_fields);

            $success_message = "QR Code atualizado com sucesso!";
            $_SESSION['success_message'] = $success_message;
            header("Location: " . URL_PATH . "qrcode/edit/" . $qrcode_id);
            exit;
        }
    }
}

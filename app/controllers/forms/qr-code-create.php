<?php
if (isset($_POST['form_qrcode_create'])) {
    // Verifica se o token CSRF é válido
    if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) {
        $error_message = "Token inválido. Tente novamente.";
        $_SESSION['error_message'] = $error_message;
        header("Location: " . URL_PATH . "qrcode");
        exit;
    } else {
        // Recebe os inputs do formulário (form_create_qrcode)
        $link_id = filter_input(INPUT_POST, 'link_id', FILTER_SANITIZE_NUMBER_INT);
        $qrcode_is_enabled = filter_input(INPUT_POST, 'qrcode_is_enabled', FILTER_VALIDATE_INT);
        $qrcode_type = filter_input(INPUT_POST, 'qrcode_type', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $qrcode_name = filter_input(INPUT_POST, 'qrcode_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $qrcode_fields = 'QR Code Vazio!';
        $qrcode_date_time = date("Y-m-d H:i:s");

        // Verifica se a variável $qrcode_type está vazia
        if (empty($qrcode_type)) {
            $error_message = "Necessário escolher um tipo de QR Code!";
            $_SESSION['error_message'] = $error_message;
            header("Location: " . URL_PATH . "qrcode");
            exit;
        }

        // Verifica se a variável $link_id está vazia
        if (empty($link_id)) {
            $error_message = "Necessário escolher um Link!";
            $_SESSION['error_message'] = $error_message;
            header("Location: " . URL_PATH . "qrcode");
            exit;
        }
        // Verifica se a variável $qrcode_name está vazia
        if (empty($qrcode_name)) {
            $error_message = "Nome não pode estar vazio!";
            $_SESSION['error_message'] = $error_message;
            header("Location: " . URL_PATH . "qrcode");
            exit;
        }
        // Verifica se o comprimento de $qrcode_name é maior que 32 caracteres
        else if (strlen($qrcode_name) > 32) {
            $error_message = "Use menos de 32 caracteres!";
            $_SESSION['error_message'] = $error_message;
            header("Location: " . URL_PATH . "qrcode");
            exit;
        } else {
            // Converte o nome em um slug usando a classe SlugConvert
            $class_slug_convert = new SlugConvert();
            $qrcode_name = $class_slug_convert->convertingSlug($qrcode_name);
        }

        // Gera um nome de imagem para o código QR com 6 caracteres, 
        // sem letras maiúsculas, com números, com letras minúsculas e sem símbolos.
        // $class_code_generate = new CodeGenerate();
        // $qrcode_image = $class_code_generate->generatingCode(6, false, true, true, false);

        // Gera uma string hexadecimal aleatória de 32 caracteres
        $qrcode_image = bin2hex(random_bytes(16));

        // Gera o código QR utilizando o nome da imagem gerada anteriormente e 
        // adiciona campos extras ao código de acordo com o tipo de código QR utilizado.
        $class_qrcode_generate = new QRCodeGenerate();
        $qrcode_generated = $class_qrcode_generate->generatingQRCode($qrcode_image, $qrcode_fields);

        // Substitui o nome da imagem original (sem extensão de arquivo) 
        // pelo nome da imagem de código QR processada (com extensão de arquivo).
        $qrcode_image = $qrcode_generated;

        // Verifica se a variável $qrcode_generated está vazia
        if (empty($qrcode_generated)) {
            $error_message = "Erro ao gerar QR Code!";
            $_SESSION['error_message'] = $error_message;
            header("Location: " . URL_PATH . "qrcode");
            exit;
        } else {
            // Insere no banco de dados
            if ($class_qrcode->setQRCodeCreate(
                $user_id, $link_id, $qrcode_is_enabled, 
                $qrcode_type, $qrcode_name, $qrcode_fields, 
                $qrcode_image, $qrcode_date_time
                )) {
                $success_message = "QR Code adicionado com sucesso!";
                $_SESSION['success_message'] = $success_message;
                header("Location: " . URL_PATH . "qrcode");
                exit;
            } else {
                $error_message = "Já existe um QR Code com esse nome!";
                $_SESSION['error_message'] = $error_message;
                header("Location: " . URL_PATH . "qrcode");
                exit;
            }

            header("Location: " . URL_PATH . "qrcode");
            exit;
        }
    }
}

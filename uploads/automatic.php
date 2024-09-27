<?php
set_time_limit(0); // Permite que o script PHP seja executado indefinidamente

while (true) {
    // Caminho do diretório onde estão as imagens JPG
    $directory = __DIR__ . '/captcha';

    // Verifica se o diretório existe
    if (is_dir($directory)) {
        // Abre o diretório
        if ($handle = opendir($directory)) {
            // Loop pelos arquivos no diretório
            while (false !== ($file = readdir($handle))) {
                // Verifica se o arquivo tem a extensão .jpg
                if (pathinfo($file, PATHINFO_EXTENSION) === 'jpeg') {
                    // Monta o caminho completo do arquivo
                    $filePath = $directory . '/' . $file;
                    // Apaga o arquivo
                    if (unlink($filePath)) {
                        echo "Arquivo $file apagado com sucesso.<br>";
                    } else {
                        echo "Falha ao apagar o arquivo $file.<br>";
                    }
                }
            }
            // Fecha o diretório
            closedir($handle);
        }
    } else {
        echo "O diretório captcha não foi encontrado.";
    }

    // Espera por 60 segundos antes de executar novamente
    sleep(60);
}
?>

<?php
/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

 class Captcha extends Model
 {
     public function generatingCaptchaImage($captcha_code)
     {
         // Caminho para a imagem de fundo
         $background_image_path = (__DIR__ . '/../../assets/images/captcha.jpg');
         
         // Carrega a imagem de fundo a partir do arquivo JPEG
         $layer = imagecreatefromjpeg($background_image_path);
         
         // Verifica se a imagem de fundo foi carregada corretamente
         // if (!$layer) {
         //     // Se a imagem de fundo não puder ser carregada, exibe um erro e sai do método
         //     throw new Exception('Não foi possível carregar a imagem de fundo.');
         // }
     
         // Define a cor do texto (um cinza escuro) para o CAPTCHA
         $captcha_text_color = imagecolorallocate($layer, 132, 132, 132);
     
         // Caminho para a fonte TrueType (TTF)
         $font_path = (__DIR__ . '/../../assets/fonts/Arimo-VariableFont_wght.ttf');  // Exemplo: caminho para a fonte TTF
     
         // Tamanho da fonte
         $font_size = 24;  // Ajuste o tamanho conforme necessário
         
         // Gera um ruído na imagem (linhas aleatórias) para dificultar a detecção por IA
        //  $line_color = imagecolorallocate($layer, 100, 100, 100);  // Cor das linhas (cinza)
        //  for($i = 0; $i < 50; $i++) {
        //      imageline($layer, rand(0, imagesx($layer)), rand(0, imagesy($layer)), rand(0, imagesx($layer)), rand(0, imagesy($layer)), $line_color);
        //  }
         
         // Adiciona distorção ao texto (ângulo aleatório para cada letra)
         for ($i = 0; $i < strlen($captcha_code); $i++) {
             $letter = substr($captcha_code, $i, 1);  // Extrai cada letra do código
             $angle = rand(-20, 20);  // Define um ângulo aleatório para cada letra
             imagettftext($layer, $font_size, $angle, 55 + $i * 25, 50, $captcha_text_color, $font_path, $letter);
             // imagettftext(image, size, angle, x, y, color, fontfile, text)
         }
     
         // Define o diretório onde a imagem será salva (neste caso, na pasta 'uploads/captcha/')
         $local = (__DIR__ . '/../../uploads/captcha/');
         
         // Salva a imagem gerada como um arquivo JPEG no diretório especificado
         imagejpeg($layer, $local . $captcha_code . '.jpeg', 70);  // Qualidade de 70%
     
         // Libera a memória usada pela imagem
         imagedestroy($layer);
     
         // Retorna o código CAPTCHA gerado
         return $captcha_code;
     }
     
     // Método que insere o código CAPTCHA no banco de dados, se ele ainda não existir.
     public function generatingCaptchaDB($captcha_code)
     {
         // Prepara uma consulta SQL para selecionar registros onde o código CAPTCHA coincide com o fornecido.
         $statement = $this->db->prepare("SELECT * FROM captcha WHERE captcha_code = :captcha_code");
         
         // Vincula o valor do código CAPTCHA ao parâmetro da consulta SQL.
         $statement->bindValue(":captcha_code", $captcha_code);
         
         // Executa a consulta SQL.
         $statement->execute();
         
         // Verifica se o código CAPTCHA já existe no banco de dados.
         if($statement->rowCount() == 0) 
         {
             // Se não existir, prepara uma consulta SQL para inserir o novo código CAPTCHA.
             $statement = $this->db->prepare("INSERT INTO captcha SET captcha_code = :captcha_code");
             
             // Vincula o valor do código CAPTCHA ao parâmetro da consulta SQL.
             $statement->bindValue(":captcha_code", $captcha_code);
             
             // Executa a consulta SQL para inserir o novo código.
             $statement->execute();
 
             // Retorna true indicando que o código foi inserido com sucesso.
             return true;
         } 
         else 
         {
             // Se o código já existir no banco de dados, retorna false.
             return false;
         }
     }
 }
 

<?php
/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

// Definição da classe Captcha, que herda de uma classe Model (presumivelmente parte do framework MVC).
class Captcha extends Model
{

    // Método que gera uma imagem CAPTCHA com o código fornecido.
    public function generatingCaptchaImage($captcha_code)
    {
        // Cria uma imagem em branco com dimensões 168x37 pixels.
        $layer = imagecreatetruecolor(168, 37);
        
        // Define a cor de fundo (um tom de cinza claro) para a imagem.
        $captcha_bg = imagecolorallocate($layer, 165, 181, 197);
        
        // Preenche a imagem com a cor de fundo definida.
        imagefill($layer, 0, 0, $captcha_bg);
        
        // Define a cor do texto (preto) para o CAPTCHA.
        $captcha_text_color = imagecolorallocate($layer, 0, 0, 0);
        
        // Adiciona o código CAPTCHA na imagem como texto, usando a fonte 5 e a posição (55, 10).
        imagestring($layer, 5, 55, 10, $captcha_code, $captcha_text_color);
        
        // Comentário: O cabeçalho de saída de imagem está comentado, provavelmente para evitar a exibição direta da imagem.
        //header("Content-type: image/jpeg");

        // Define o diretório onde a imagem será salva (neste caso, na pasta 'uploads' a partir do diretório atual).
        $local = (__DIR__ . '/../../uploads/captcha/');
        
        // Salva a imagem gerada como um arquivo JPEG no diretório especificado, com o código CAPTCHA como nome de arquivo.
        // A qualidade da imagem é definida em 70%.
        imagejpeg($layer, $local . $captcha_code . '.jpeg', 70);

        // Retorna o código CAPTCHA gerado.
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

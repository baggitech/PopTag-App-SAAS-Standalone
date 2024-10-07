<?php
/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class DatabaseConnection
{
    // Declaração de uma propriedade privada que armazenará a instância da conexão PDO
    private PDO $db;

    public function __construct()
    {
        // Chama o método privado connect() para estabelecer a conexão com o banco de dados
        $this->connect();
    }

    private function connect()
    {
        try 
        {
            // Configuração das opções para a conexão PDO, um array de configurações importantes
            $options = [
                // Define que consultas preparadas não serão emuladas, garantindo maior segurança e compatibilidade
                PDO::ATTR_EMULATE_PREPARES => false, 
                // Configura o PDO para lançar exceções em caso de erros, facilitando o tratamento de erros
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                // Define o modo de retorno padrão como um array associativo
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
                // Instrução SQL inicial para configurar o conjunto de caracteres e colação ao conectar ao MySQL
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci'
            ];

            // Monta a string de conexão (Data Source Name - DSN) usando constantes definidas para o driver, host e nome do banco de dados
            $dsn = sprintf('%s:host=%s;dbname=%s', DB_DRIVER, DB_HOST, DB_NAME);

            // Cria uma nova instância de PDO com a string de conexão, nome de usuário, senha e opções de conexão
            $this->db = new PDO($dsn, DB_USER, DB_PASS, $options);
        } 
        catch(PDOException $e) 
        {
            // Captura exceções em caso de falha na conexão e encerra o script exibindo a mensagem de erro
            die("Connection error: " . $e->getMessage());
        }        
    }

    // Método público que retorna a conexão PDO para que outras classes possam utilizá-la
    public function getConnection(): PDO
    {
        return $this->db;
    }
}

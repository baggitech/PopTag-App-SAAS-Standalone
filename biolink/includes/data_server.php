<?php
// Define o nível de exibição de erros como E_ALL, incluindo avisos, erros e notificações
// esta linha deve ser removida em um ambiente de produção.
ini_set('error_reporting', E_ALL);

// Define o fuso horário padrão utilizado pela aplicação.
date_default_timezone_set('America/Sao_Paulo');

// Esta função é responsável por determinar a URL base de da aplicação web. 
function getBaseUrl()
{
    // Verifica se a conexão com a aplicação é segura.
    $base_url = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) === 'on' ? 'https' : 'http';

    // Obtém o nome do host (domínio) da aplicação.
    $base_url .= '://' . $_SERVER['HTTP_HOST'];

    // Obtém o caminho completo do script em execução, incluindo o nome do arquivo.
    $script_name = $_SERVER['SCRIPT_NAME'];

    // Remove o nome do arquivo do caminho, deixando apenas o diretório.
    $directory = str_replace(basename($script_name), '', $script_name);

    // Adaptação para lidar com reescrita de URL que oculta 'public_html'.
    //$directory = str_replace('public_html/', '', $directory);

    // Concatena o diretório ao URL base para obter a URL completa da aplicação.
    $base_url .= $directory;

    return $base_url;
}

// Chama a função para obter a URL base da aplicação e a armazena em $base_url.
$base_url = getBaseUrl();

// Define a constante URL_PATH com o caminho base da aplicação.
define('URL_PATH', $base_url);
define('COOKIE_PATH', preg_replace('|https?://[^/]+|i', '', URL_PATH));

// Verifica se a sessão já está ativa
if (session_status() !== PHP_SESSION_ACTIVE) 
{
    // Define as configurações do cookie de sessão
    $options = [
        'lifetime' => null,
        'path' => COOKIE_PATH,
        'domain' => $base_url,
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Lax'
    ];

    session_set_cookie_params($options);

    // Inicia a sessão
    ob_start();
    session_start();
}

// Como a variável $base_url não é mais necessária após a definição 
// da constante remove-se a variável não utilizada.
unset($base_url);

// Verifica se o parâmetro 'url' está presente e não está vazio
if (isset($_GET['url']) && !empty($_GET['url'])) 
{
    // Obtém e sanitiza o valor 'url' da variável $_GET, removendo possíveis caracteres inválidos
    $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);

    // Divide o URL em partes usando '/' como delimitador e obtém a última parte do array
    $parts = explode('/', $url);
    $url = end($parts);

    try {
        // Prepara uma consulta SQL com várias junções (LEFT JOINs) para buscar dados relacionados ao link
        $result = array();
        $statement = $db->prepare("SELECT * FROM links
            LEFT JOIN link_domain ON links.link_id = link_domain.link_id
            LEFT JOIN link_seo ON links.link_id = link_seo.link_id
            LEFT JOIN link_fonts ON links.link_id = link_fonts.link_id
            LEFT JOIN link_background ON links.link_id = link_background.link_id    
            LEFT JOIN blocks ON links.link_id = blocks.link_id
            LEFT JOIN block_avatar ON links.link_id = block_avatar.link_id                      
            WHERE link_name = :link_name ORDER BY block_orderliness
      ");
        $statement->bindParam(':link_name', $url, PDO::PARAM_STR);
        $statement->execute();
        if ($statement->rowCount() > 0) 
        {
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            //$_SESSION['link_id'] = $result['link_id'];
            //$_SESSION['link_name'] = $result['link_name'];
        } 
        else 
        {
            // Configura o código de resposta HTTP 404 para indicar "não encontrado" 
            // e redireciona para a página de erro 404
            http_response_code(404);
            header("Location: " . URL_PATH . "404.html");
            exit;
        }
    } 
    catch (PDOException $e) 
    {
        // Em caso de erro na execução da consulta (exceção do banco de dados),
        // configura o código de resposta HTTP 500 para erro interno do servidor
        // e redireciona para a página de erro 500
        http_response_code(500);
        header("Location: " . URL_PATH . "500.html");
        exit;
    }
} 
else 
{
    // Se o parâmetro 'url' não estiver definido ou estiver vazio, configura o código de resposta HTTP 400 
    // para indicar "solicitação inválida" e redireciona para a página de erro 400
    http_response_code(400);
    header("Location: " . URL_PATH . "400.html");
    exit;
}

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
    // Obtém e sanitiza o valor 'url' da variável $_GET
    $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);

    // Divide o URL em partes usando '/' como delimitador e obtém a última parte
    $parts = explode('/', $url);
    $url = end($parts);

    try {
        // Prepara uma consulta SQL com várias junções (LEFT JOINs)
        $statement = $db->prepare("SELECT * FROM links
            LEFT JOIN link_domain ON links.link_id = link_domain.link_id
            LEFT JOIN link_seo ON links.link_id = link_seo.link_id
            LEFT JOIN link_fonts ON links.link_id = link_fonts.link_id
            LEFT JOIN link_background ON links.link_id = link_background.link_id
            LEFT JOIN link_snippets ON links.link_id = link_snippets.link_id    
            LEFT JOIN blocks ON links.link_id = blocks.link_id
            LEFT JOIN block_avatar ON links.link_id = block_avatar.link_id                      
            WHERE link_name = :link_name ORDER BY block_orderliness
      ");

        // Associa o parâmetro 'url' à consulta preparada
        $statement->bindParam(':link_name', $url, PDO::PARAM_STR);

        // Executa a consulta SQL
        $statement->execute();

        // Verifica se há resultados
        if ($statement->rowCount() > 0) 
        {
            // Se há resultados, armazena-os em $result
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            // Chama a função que responde com dados JSON
            responseJSON($result);
        } 
        else 
        {
            // Se não houver resultados, define $result como array vazio
            $result = array();
            // Configura o código de resposta HTTP 404 e redireciona para a página de erro 404
            http_response_code(404);
            header("Location: " . URL_PATH . "404.html");
            exit;
        }
    } 
    catch (PDOException $e) 
    {
        // Em caso de exceção (erro no banco de dados), configura o código de resposta HTTP 500
        // e redireciona para a página de erro 500
        http_response_code(500);
        header("Location: " . URL_PATH . "500.html");
        exit;
    }
} 
else 
{
    // Se 'url' não estiver definido ou estiver vazio, configura o código de resposta HTTP 400
    // e redireciona para a página de erro 400
    http_response_code(400);
    header("Location: " . URL_PATH . "400.html");
    exit;
}

// Define a função que responde com dados JSON
function responseJSON(array $result)
{
    // Define o cabeçalho Content-Type como application/json
    header('Content-Type: application/json');

    // Codifica o resultado em formato JSON e exibe-o
    // FORMA ESPECIAL
    //echo json_encode($result, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

    // Imprime os dados em formato JSON
    // FORMA SIMPLES
    echo json_encode($result, JSON_PRETTY_PRINT);
}

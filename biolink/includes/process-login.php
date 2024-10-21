<?php
session_start();
require_once(__DIR__ . '/conn.php');
require_once(__DIR__ . '/init.php');

// Define a senha correta para o login (pode vir do banco de dados)
$senha_correta = '12345';

// Verifica se a senha foi enviada
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $password = $_POST['password'];

    // Validação da senha
    if ($password === $senha_correta) 
    {
        $_SESSION['loggedin'] = true;  // Define que o usuário está logado
        header("Location: " . URL_PATH . $_SESSION['link_name']);
        exit;
    } 
    else 
    {
        $_SESSION['login_error'] = "Senha incorreta!";
        header("Location: login.php");  // Retorna ao formulário de login com erro
        exit;
    }
} 
else 
{
    header("Location: login.php");
    exit;
}

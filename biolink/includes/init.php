<?php
ini_set('error_reporting', E_ALL);
date_default_timezone_set('America/Sao_Paulo');

// Esta função é responsável por determinar a URL base de da aplicação web. 
function getBaseUrl()
{
    $base_url = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) === 'on' ? 'https' : 'http';
    $base_url .= '://' . $_SERVER['HTTP_HOST'];
    $script_name = $_SERVER['SCRIPT_NAME'];
    $directory = str_replace(basename($script_name), '', $script_name);
    $base_url .= $directory;

    return $base_url;
}

// Define a constante URL_PATH com o caminho base da aplicação.
define('URL_PATH', getBaseUrl());
define('COOKIE_PATH', preg_replace('|https?://[^/]+|i', '', URL_PATH));

// Verifica se a sessão já está ativa
if (session_status() !== PHP_SESSION_ACTIVE) 
{
    // Inicia a sessão
    ob_start();
    session_start();
}
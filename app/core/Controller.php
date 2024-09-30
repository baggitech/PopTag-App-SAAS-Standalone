<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

// Define o caminho base para as views.
define('VIEW_PATH', __DIR__ . '/../../views/');

class Controller
{
    /**
     * Carrega uma view simples.
     *
     * @param string $viewName Nome da view a ser carregada.
     * @param array $viewData Dados opcionais a serem usados na view.
     */
    public function loadView($viewName, $viewData = [])
    {
        // Verifica se o arquivo da view existe.
        $viewFile = VIEW_PATH . $viewName . '.php';
        if (file_exists($viewFile)) 
        {
            // Extrai os dados da view e os torna variáveis disponíveis.
            // Aviso: o uso de `extract` pode gerar conflitos de variáveis.
            extract($viewData);

            // Carrega a view.
            require_once $viewFile;
        } 
        else 
        {
            // Tratamento de erro: view não encontrada.
            $this->loadErrorView('View não encontrada: ' . $viewName);
        }
    }

    /**
     * Carrega um template que contém uma view.
     *
     * @param string $viewName Nome da view a ser carregada.
     * @param array $viewData Dados opcionais a serem usados na view.
     */
    public function loadTemplate($viewName, $viewData = [])
    {
        // Verifica se o template principal (wrapper) existe.
        $templateFile = VIEW_PATH . 'wrapper.php';
        if (file_exists($templateFile)) 
        {
            // Extrai os dados da view e os torna variáveis disponíveis.
            extract($viewData);

            // Carrega o template que envolve a view.
            require_once $templateFile;
        } 
        else 
        {
            // Tratamento de erro: template não encontrado.
            $this->loadErrorView('Template não encontrado');
        }
    }

    /**
     * Carrega uma view dentro de um template.
     *
     * @param string $viewName Nome da view a ser carregada.
     * @param array $viewData Dados opcionais a serem usados na view.
     */
    public function loadViewInTemplate($viewName, $viewData = [])
    {
        // Verifica se o arquivo da view existe.
        $viewFile = VIEW_PATH . $viewName . '.php';
        if (file_exists($viewFile)) 
        {
            // Extrai os dados da view e os torna variáveis disponíveis.
            extract($viewData);

            // Carrega a view dentro do template.
            require_once $viewFile;
        } 
        else 
        {
            // Tratamento de erro: view dentro do template não encontrada.
            $this->loadErrorView('View dentro do template não encontrada: ' . $viewName);
        }
    }

    /**
     * Carrega uma view de erro.
     *
     * @param string $errorMessage Mensagem de erro a ser exibida.
     */
    private function loadErrorView($errorMessage)
    {
        // Exibe uma página de erro simples.
        echo '<h1>Erro</h1>';
        echo '<p>' . htmlspecialchars($errorMessage) . '</p>';
    }
}

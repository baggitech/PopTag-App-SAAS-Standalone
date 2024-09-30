<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class Controller
{
    /**
     * Carrega uma view simples.
     *
     * @param string $viewName Nome da view a ser carregada.
     * @param array $viewData Dados opcionais a serem usados na view.
     */
    public function loadView($viewName, $viewData =[])
    {
        // Extrai os dados da view e os torna variáveis disponíveis.
        extract($viewData);

        // Carrega a view.
        require_once __DIR__ . '/../../views/' . $viewName . '.php';
    }

    /**
     * Carrega um template que contém uma view.
     *
     * @param string $viewName Nome da view a ser carregada.
     * @param array $viewData Dados opcionais a serem usados na view.
     */
    public function loadTemplate($viewName, $viewData = [])
    {
        // Extrai os dados da view e os torna variáveis disponíveis.
        extract($viewData);

        // Carrega o template que envolve a view.
        require_once __DIR__ . '/../../views/wrapper.php';
    }

    /**
     * Carrega uma view dentro de um template.
     *
     * @param string $viewName Nome da view a ser carregada.
     * @param array $viewData Dados opcionais a serem usados na view.
     */
    public function loadViewInTemplate($viewName, $viewData = [])
    {
        // Extrai os dados da view e os torna variáveis disponíveis.
        extract($viewData);

        // Carrega a view dentro do template.
        require_once __DIR__ . '/../../views/' . $viewName . '.php';
    }
}

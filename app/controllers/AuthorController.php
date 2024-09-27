<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class AuthorController extends Controller
{
	public function index()
	{
		$page = 'author/index';
		$data = array();

		// Chama o serviço para obter os dados
		$data = (new DataService())->getDataServiceFrontEnd($data);

		// Carrega o template com os dados obtidos
		$this->loadTemplate($page, $data);
	}
}

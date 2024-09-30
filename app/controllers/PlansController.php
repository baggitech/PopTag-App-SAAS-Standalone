<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class PlansController extends Controller
{
	public function index()
	{
		$data = array();
		$data = (new DataService())->getDataServiceFrontEnd($data);
		// ---------------------------------------------------------------------- //

		// Carrega o template com os dados obtidos
		$this->loadTemplate('notfound/index', $data);
	}
}

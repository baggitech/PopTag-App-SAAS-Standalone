<?php
/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class ListController extends Controller 
{
	public function index()	
	{
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;
		$data = (new DataService())->getDataServiceFrontEnd($data);
		// ---------------------------------------------------------------------- //
		
		$this->loadTemplate('list/index', $data);
	}
}


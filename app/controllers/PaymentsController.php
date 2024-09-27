<?php
/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class PaymentsController extends Controller 
{
	public function index()	
	{
		$page = 'payments/index';
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;

		// Chama o serviço para obter os dados
		$data = (new DataService())->getDataServiceBackEnd($page, $data, $user_id);

		$this->loadTemplate('payments/index', $data);

	}
}

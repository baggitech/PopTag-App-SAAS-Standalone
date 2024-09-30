<?php
/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class NotificationsController extends Controller 
{
	public function index()	
	{
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;
		$data = (new DataService())->getDataServiceBackEnd($data, $user_id);

		$this->loadTemplate('admin/notifications/index', $data);
	}
}

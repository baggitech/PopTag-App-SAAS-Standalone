<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class LogoutController extends Controller
{
	public function index()
	{
		session_destroy();
		header("Location: " . URL_PATH . "signin");
		exit;
	}
}

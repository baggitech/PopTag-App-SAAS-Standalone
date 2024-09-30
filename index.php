<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

require_once(__DIR__ . '/config/config.php');
require_once(__DIR__ . '/app/init.php');

// if(session_id()){echo "<small>&nbsp;SESSION_ID: ".hash('sha256', session_id())." - Gerado automaticamente e hasheado.<br></small>";}
// if(isset($_SESSION['csrf_token'])){echo "<small>&nbsp;CSRF_TOKEN SESSION: ".$_SESSION['csrf_token']." - Token atual da sessão.<br></small>";}
// if(isset($_SESSION['token'])){echo "<small>&nbsp;TOKEN SESSION: ".$_SESSION['token']." - Token salvo no banco de dados.<br></small>";}

$core = new Core();

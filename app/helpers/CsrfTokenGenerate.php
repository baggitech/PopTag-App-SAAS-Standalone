<?php
/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class CsrfTokenGenerate extends Model
{

	// Adiciona um token CSRF exclusivo para cada formulário
	public function generateCsrfToken()
	{
		// Regenerar o ID da sessão
		session_regenerate_id(true);

		// Pegar o session_id atual
		$sessionId = session_id();

		// Gerar um hash SHA-256 a partir do session_id
		$token = hash('sha256', $sessionId);

		// Armazenar o token na sessão para validação posterior
		$_SESSION['csrf_token'] = $token;

		// Retornar o token gerado
		return $token;
	}
	
}
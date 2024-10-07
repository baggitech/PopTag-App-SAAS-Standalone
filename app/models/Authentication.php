<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class Authentication extends Model
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

	public function authLogin($email, $password, $token)
	{
		// Utilizar hash mais forte para senha do usuário
		$hashed_password = hash('sha256', $password);

		// Verificar se o email do usuário existe
		$sql = "SELECT COUNT(*) FROM users WHERE email = :email";
		$statement = $this->db->prepare($sql);
		$statement->bindValue(":email", $email, PDO::PARAM_STR);
		$statement->execute();
		$user_exists = $statement->fetchColumn();
		// Se o email não existir, retorne mensagem de erro
		if ($user_exists == 0) 
		{
			$_SESSION['error_message'] = "O email fornecido não existe em nosso sistema.";
			header("Location: " . URL_PATH . "signin");
			exit;
		} 
		else 
		{
			// Verificar se o email e a senha correspondem a um registro na tabela de usuários
			$sql = "SELECT COUNT(*) FROM users WHERE email = :email AND password = :password";
			$statement = $this->db->prepare($sql);
			$statement->bindValue(":email", $email, PDO::PARAM_STR);
			$statement->bindValue(":password", $hashed_password, PDO::PARAM_STR);
			$statement->execute();
			$user_password_match = $statement->fetchColumn();
			// Se a senha não corresponder, retorne mensagem de erro
			if ($user_password_match == 0) 
			{
				$_SESSION['error_message'] = "A senha fornecida não corresponde ao email fornecido.";
				header("Location: " . URL_PATH . "signin");
				exit;
			} 
			else 
			{
				// Usar prepared statements do PDO para evitar SQL injection
				$sql = "UPDATE users SET token = :token WHERE email = :email";
				$statement = $this->db->prepare($sql);
				$statement->bindValue(':token', $token, PDO::PARAM_STR);
				$statement->bindValue(':email', $email, PDO::PARAM_STR);
				$statement->execute();

				// Usar prepared statements do PDO para evitar SQL injection e recuperar apenas as colunas necessárias
				$sql = "SELECT user_id, name, verified, level, email, code_verify, token FROM users WHERE email = :email AND password = :password";
				$statement = $this->db->prepare($sql);
				$statement->bindValue(":email", $email, PDO::PARAM_STR);
				$statement->bindValue(":password", $hashed_password, PDO::PARAM_STR);
				$statement->execute();
				$user = $statement->fetch(PDO::FETCH_ASSOC);

				// Verificar se a consulta SQL retorna apenas um resultado
				if ($user !== false && $statement->rowCount() == 1) 
				{
					// Criar sessões com dados encontrados
					$_SESSION['user_id'] = $user['user_id'];
					$_SESSION['username'] = $user['name'];
					$_SESSION['user'] = $user['name'];
					$_SESSION['verified'] = $user['verified'];
					$_SESSION['level'] = $user['level'];
					$_SESSION['email'] = $user['email'];
					$_SESSION['code_verify'] = $user['code_verify'];
					$_SESSION['token'] = $user['token'];

					return true;
				} 
				else 
				{
					return false;
				}
			}
		}
	}

	// Verifica se o token CSRF do usuário é válido
	private function isTokenValid()
	{
		// Prepara uma consulta SQL para buscar o token do usuário no banco de dados
		$statement = $this->db->prepare("SELECT token FROM users WHERE email = :email");
		
		// Associa o valor do email da sessão à variável de consulta
		$statement->bindValue(":email", $_SESSION['email']);
		
		// Executa a consulta
		$statement->execute();
		
		// Obtém o resultado da consulta
		$user = $statement->fetch(PDO::FETCH_ASSOC);

		// Retorna verdadeiro se o usuário foi encontrado, se há exatamente um resultado,
		// e se o token CSRF da sessão corresponde ao token armazenado no banco de dados
		return ($user !== false && $statement->rowCount() == 1 && hash_equals($_SESSION['csrf_token'], $user['token']));
	}

	// Verifica se o usuário está logado, ou seja, se há uma sessão ativa
	private function isLoggedIn()
	{
		// Retorna verdadeiro se o índice 'user' existir na sessão e não estiver vazio
		return isset($_SESSION['user']) && !empty($_SESSION['user']);
	}

	// Verifica se o usuário está verificado (por exemplo, se confirmou o email)
	private function isVerified()
	{
		// Retorna verdadeiro se o índice 'verified' existir na sessão e for igual a 1
		return isset($_SESSION['verified']) && $_SESSION['verified'] == 1;
	}

	// Verifica se o usuário está logado e também verificado
	private function isLoggedInAndVerified()
	{
		// Retorna verdadeiro se o usuário estiver logado e verificado
		return $this->isLoggedIn() && $this->isVerified();
	}

	// Requer que o usuário esteja logado para acessar determinadas páginas
	public function requireLoggedIn()
	{
		// Se o token CSRF for inválido ou o usuário não estiver logado, redireciona para a página de login
		if (!$this->isTokenValid() || !$this->isLoggedIn()) 
		{
			// Define uma mensagem de erro na sessão
			$_SESSION['error_message'] = "Precisa estar logado!";
			
			// Redireciona o usuário para a página de login
			header("Location: " . URL_PATH . "signin");
			exit;
		}
	}

	// Requer que o usuário esteja logado e verificado para acessar determinadas páginas
	public function requireLoggedInAndVerified()
	{
		// Se o token CSRF for inválido, o usuário não estiver logado ou não estiver verificado,
		// redireciona para a página de verificação
		if (!$this->isTokenValid() || !$this->isLoggedInAndVerified()) 
		{
			// Define uma mensagem de erro na sessão
			$_SESSION['error_message'] = "Precisa estar verificado para continuar!";
			
			// Redireciona o usuário para a página de verificação
			header("Location: " . URL_PATH . "verify");
			exit;
		}
	}

	// Requer que o usuário esteja deslogado para acessar determinadas páginas (por exemplo, páginas públicas)
	public function requireLogout()
	{
		// Se o usuário estiver logado, redireciona para o painel de controle
		if ($this->isLoggedIn()) 
		{
			// Define uma mensagem de erro na sessão
			$_SESSION['error_message'] = 'Não permitido!';
			
			// Redireciona o usuário para o dashboard
			header("Location: " . URL_PATH . "./dashboard");
			exit;
		}
	}
}

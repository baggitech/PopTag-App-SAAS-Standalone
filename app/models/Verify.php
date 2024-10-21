<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class Verify extends Model
{
	// CRIAR UMA TABELA PARA ARMAZENAR OS CÓDIGOS DE VERIFICAÇÃO EM VEZ DE USAR A TABELA DE USUÁRIOS
	public function changeStatusToVerified($email, $code_verify)
	{
		$statement = $this->db->prepare("SELECT * FROM users WHERE email = :email AND code_verify = :code_verify");
		$statement->bindValue(":email", $email);
		$statement->bindValue(":code_verify", $code_verify);
		$statement->execute();
		if ($statement->rowCount() > 0) {
			$statement = $this->db->prepare("UPDATE users SET 
				verified = :verified 
				WHERE email = :email
				");
			$statement->bindValue(":verified", 1);
			$statement->bindValue(":email", $email);
			$statement->execute();

			return true;
		} else {
			return false;
		}
	}
}


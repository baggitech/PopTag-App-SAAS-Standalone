<?php

/**
 * A lightweight PHP MVC Framework.
 * 
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class Recovery extends Model
{
    public function checkEmailUsersTable($email)
    {
        $statement = $this->db->prepare("SELECT email FROM users WHERE email = :email");
        $statement->bindValue(":email", $email);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function checkEmailRecoveryTable($email)
    {
        $statement = $this->db->prepare("SELECT email FROM recovery_token WHERE email = :email");
        $statement->bindValue(":email", $email);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function generateNewToken($email, $token)
    {
        $currentDatetime = date("Y-m-d H:i:s");
        $datetimePlusOne = new DateTime($currentDatetime);
        $datetimePlusOne->modify("+1 day");
        $datetimePlusOne = $datetimePlusOne->format('Y-m-d H:i:s');

        $statement = $this->db->prepare("SELECT * FROM recovery_token WHERE email = :email");
        $statement->bindValue(":email", $email);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            $statement = $this->db->prepare("UPDATE 
                recovery_token SET 
                token = :token,
                start_token = :start_token,
                expiration_token = :expiration_token 
                WHERE email = :email
            ");
            $statement->bindValue(":email", $email);
            $statement->bindValue(":token", $token);
            $statement->bindValue(":start_token", $currentDatetime);
            $statement->bindValue(":expiration_token", $datetimePlusOne);
            $statement->execute();

            return true;
        } else {
            return false;
        }
    }

    public function addToken($email, $token)
    {
        $currentDatetime = date("Y-m-d H:i:s");
        $datetimePlusOne = new DateTime($currentDatetime);
        $datetimePlusOne->modify("+1 day");
        $datetimePlusOne = $datetimePlusOne->format('Y-m-d H:i:s');

        $statement = $this->db->prepare("SELECT * FROM recovery_token WHERE email = :email AND token = :token");
        $statement->bindValue(":email", $email);
        $statement->bindValue(":token", $token);
        $statement->execute();
        if ($statement->rowCount() == 0) {
            $statement = $this->db->prepare("INSERT INTO recovery_token SET 
                email = :email,
                token = :token,
                start_token = :start_token,
                expiration_token = :expiration_token
            ");
            $statement->bindValue(":email", $email);
            $statement->bindValue(":token", $token);
            $statement->bindValue(":start_token", $currentDatetime);
            $statement->bindValue(":expiration_token", $datetimePlusOne);
            $statement->execute();

            return true;
        } else {
            return false;
        }
    }

    public function getEmailAndTokenRecovery($recovery_token)
    {
        $array = array();
        $statement = $this->db->prepare("SELECT * FROM recovery_token WHERE token = :token");
        $statement->bindValue(":token", $recovery_token);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            $array = $result;

            return $array;
        } else {
            return false;
        }
    }

    public function recoveryUserPassword($email, $password)
    {
        // Preparar a consulta SQL para selecionar o usuário com o email fornecido
        $statement = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $statement->bindValue(":email", $email);
        $statement->execute();

        // Verificar se há um único usuário com o email fornecido
        if ($statement->rowCount() == 1) {
            // Recuperar os resultados como um array associativo
            $user = $statement->fetch(PDO::FETCH_ASSOC);

            // Atualizar a senha do usuário
            $statement = $this->db->prepare("UPDATE users SET 
	        	password = :password 
	        	WHERE email = :email
	        ");
            $statement->bindValue(":password", hash('sha256', $password));
            $statement->bindValue(":email", $email);
            $statement->execute();

            // Armazenar informações mínimas do usuário na sessão (não armazene a senha)
            //$_SESSION['user_id'] = $user['id'];
            //$_SESSION['name'] = $user['name'];
            //$_SESSION['email'] = $user['email'];

            // Retornar verdadeiro para indicar que a recuperação de senha foi bem-sucedida
            return true;
        } else {
            // Não encontrou um único usuário com o email fornecido, então retornar falso
            return false;
        }
    }
}

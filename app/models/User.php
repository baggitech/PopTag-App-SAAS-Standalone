<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */


class User extends Model
{
	public function getUsers()
	{
		$array = array();
		$statement = $this->db->prepare("SELECT * FROM users");
		$statement->execute();
		$result = $statement->rowCount();
		$array = $result;

		return $array;
	}

	public function getUser($user_id)
	{
		$array = array();
		$statement = $this->db->prepare("SELECT * FROM users WHERE user_id = :user_id");
		$statement->bindValue(":user_id", $user_id);
		$statement->execute();
		if ($statement->rowCount() > 0) {
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			$array = $result;
		}

		return $array;
	}

	public function getProfile($name)
	{
		$array = array();
		$statement = $this->db->prepare("SELECT * FROM users WHERE name = :a");
		$statement->bindValue(":a", $name);
		$statement->execute();
		if ($statement->rowCount() > 0) {
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			$array = $result;

			return $array;
		}
	}

	public function addUser($name, $email, $password, $code_verify)
	{
		$statement = $this->db->prepare("SELECT user_id FROM users WHERE email = :email");
		$statement->bindValue(":email", $email);
		$statement->execute();
		if ($statement->rowCount() == 0) 
		{
			$statement = $this->db->prepare("INSERT INTO users SET
				name = :name,
				email = :email,
				password = :password,
				level = :level,
				verified = :verified,
				code_verify = :code_verify
			");
			$statement->bindValue(":name", $name);
			$statement->bindValue(":email", $email);
			$statement->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
			$statement->bindValue(":level", 1);
			$statement->bindValue(":verified", 0);
			$statement->bindValue(":code_verify", $code_verify);
			$statement->execute();

			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['code_verify'] = $code_verify;

			return true;
		} 
		else 
		{
			return false;
		}
	}

	public function editPersonalData($user_id, $name, $birth_date, $address, $city, $state, $zip_code, $country)
	{
		$statement = $this->db->prepare("SELECT * FROM users WHERE user_id = :user_id");
		$statement->bindValue(":user_id", $user_id);
		$statement->execute();
		if ($statement->rowCount() > 0) {
			$statement = $this->db->prepare("UPDATE users SET
				name = :name,
				birth_date = :birth_date,
				address = :address,
				city = :city,
				state = :state,
				zip_code = :zip_code,
				country = :country
				WHERE user_id = :user_id
				");
			$statement->bindValue(":name", $name);
			$statement->bindValue(":birth_date", $birth_date);
			$statement->bindValue(":address", $address);
			$statement->bindValue(":city", $city);
			$statement->bindValue(":state", $state);
			$statement->bindValue(":zip_code", $zip_code);
			$statement->bindValue(":country", $country);
			$statement->bindValue(":user_id", $user_id);
			$statement->execute();

			return true;
		} else {
			return false;
		}
	}

	public function editPersonalDetail($user_id, $user_name, $site, $bio)
	{
		$statement = $this->db->prepare("SELECT * FROM users WHERE user_id = :user_id");
		$statement->bindValue(":user_id", $user_id);
		$statement->execute();
		if ($statement->rowCount() > 0) {
			$statement = $this->db->prepare("UPDATE users SET
				user_name = :user_name,
				site = :site,
				bio = :bio
				WHERE user_id = :user_id
				");
			$statement->bindValue(":user_name", $user_name);
			$statement->bindValue(":site", $site);
			$statement->bindValue(":bio", $bio);
			$statement->bindValue(":user_id", $user_id);
			$statement->execute();

			return true;
		} else {
			return false;
		}
	}

	public function editUserMobile($user_id, $mobile_country, $mobile_number, $mobile_country_2, $mobile_number_2)
	{
		$statement = $this->db->prepare("SELECT * FROM users WHERE user_id = :user_id");
		$statement->bindValue(":user_id", $user_id);
		$statement->execute();
		if ($statement->rowCount() > 0) {
			$statement = $this->db->prepare("UPDATE users SET
				mobile_country = :mobile_country,
				mobile_number = :mobile_number,
				mobile_country_2 = :mobile_country_2,
				mobile_number_2 = :mobile_number_2
				WHERE user_id = :user_id
				");
			$statement->bindValue(":mobile_country", $mobile_country);
			$statement->bindValue(":mobile_number", $mobile_number);
			$statement->bindValue(":mobile_country_2", $mobile_country_2);
			$statement->bindValue(":mobile_number_2", $mobile_number_2);
			$statement->bindValue(":user_id", $user_id);
			$statement->execute();

			return true;
		} else {
			return false;
		}
	}

	public function editUserEmail($user_id, $email, $email_2)
	{
		$statement = $this->db->prepare("SELECT * FROM users WHERE user_id = :user_id");
		$statement->bindValue(":user_id", $user_id);
		$statement->execute();
		if ($statement->rowCount() > 0) {
			$statement = $this->db->prepare("UPDATE users SET
				email = :email,
				email_2 = :email_2
				WHERE user_id = :user_id
				");
			$statement->bindValue(":email", $email);
			$statement->bindValue(":email_2", $email_2);
			$statement->bindValue(":user_id", $user_id);
			$statement->execute();

			return true;
		} else {
			return false;
		}
	}

}

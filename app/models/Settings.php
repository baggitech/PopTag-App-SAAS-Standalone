<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class Settings extends Model
{
	public function getSettings() 
	{
		$array = array();
		$statement = $this->db->prepare("SELECT * FROM settings");
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($result as $row) 
		{
			$array[$row['key']] = $row['value'];
		}

		return $array;
	}

	public function editSettings($backgrounds, $center_content, $dark_mode) 
	{
		$statement = $this->db->prepare("UPDATE settings SET
			backgrounds = :backgrounds,
			center_content = :center_content,
			dark_mode = :dark_mode
			WHERE id=1
			");
		$statement->bindValue(":backgrounds", $backgrounds);
		$statement->bindValue(":center_content", $center_content);
		$statement->bindValue(":dark_mode", $dark_mode);
		$statement->execute();

		return true;
	}
}
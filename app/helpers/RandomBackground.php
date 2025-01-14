<?php
/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class RandomBackground extends Model
{
	public function randBG()
	{
		// RECOVERING FIELD VALUE IN DB
		$statement = $this->db->prepare("SELECT dark_mode FROM settings");
		$statement->execute();
		$result = $statement->fetch(PDO::FETCH_ASSOC);
		foreach ($result as $value) 
		{
			$num = $value;
		}
		// CONVERTENDO INTEIRO PARA STRING
		if($num == 0) {
			$theme = "white";
		}
		elseif($num == 1) {
			$theme = "dark";
		}
		// COUNTING FOLDER IMAGES
		$folder = scandir('uploads/backgrounds/'.$theme.'/');
		$qtd = count($folder) - 2;
		// RANDOM BACKGROUND
		$array = array();
		$array['r1'] = $theme;
		$array['r2'] = rand(1, $qtd);

		return $array;
	}
}
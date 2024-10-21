<?php

/**
 * A lightweight PHP MVC Framework.
 * 
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */


class LinkBackground extends Model
{
    public function getLinkBackground($link_id) 
    {
        $array = array();
        $statement = $this->db->prepare("SELECT * FROM link_background WHERE link_id = :link_id");
        $statement->bindValue(":link_id", $link_id);
        $statement->execute();
        if($statement->rowCount() > 0) 
        {
            $result = $statement->fetch(PDO::FETCH_ASSOC);
			$array = $result;
        }
        
        return $array;
    }

    public function updateLinkBackground($link_id, $background_type, $background_color_code, $background_color_one, $background_color_two, $background_to_direction, $background_image) 
    {
        // Verifica se o link existe no banco de dados
        $statement = $this->db->prepare("SELECT * FROM link_background WHERE link_id = :link_id");
        $statement->bindValue(":link_id", $link_id);
        $statement->execute();
    
        // Se o link for encontrado, faz o update
        if ($statement->rowCount() > 0) 
        {
            $statement = $this->db->prepare("UPDATE link_background SET 
                background_type = :background_type,
                background_color_code = :background_color_code,
                background_color_one = :background_color_one,
                background_color_two = :background_color_two,
                background_to_direction = :background_to_direction,
                background_image = :background_image,
                background_updated_at = :background_updated_at
                WHERE link_id = :link_id
            ");
    
            // Atribui os valores das variáveis de fonte
            $statement->bindValue(":background_type", $background_type);
            $statement->bindValue(":background_color_code", $background_color_code);
            $statement->bindValue(":background_color_one", $background_color_one);
            $statement->bindValue(":background_color_two", $background_color_two);
            $statement->bindValue(":background_to_direction", $background_to_direction);
            $statement->bindValue(":background_image", $background_image);
            $statement->bindValue(":background_updated_at", date("Y-m-d H:i:s")); // Atualiza a data
    
            // Atribui o ID do link
            $statement->bindValue(":link_id", $link_id);
    
            // Executa a consulta
            $statement->execute();
    
            return true;
        } 
        else 
        {
            return false; // Retorna falso se o link não for encontrado
        }
    }

	public function deleteLinkBackground($link_id) 
	{
		$statement = $this->db->prepare("SELECT * FROM link_background WHERE link_id = :link_id");
		$statement->bindValue(":link_id", $link_id);
		$statement->execute();
		if($statement->rowCount() > 0) 
		{
			$statement = $this->db->prepare("DELETE FROM link_background WHERE link_id = :link_id");
			$statement->bindValue(":link_id", $link_id);
			$statement->execute();

			return true;
		} 
		else 
		{
			return false;
		}
	}   

}
<?php

/**
 * A lightweight PHP MVC Framework.
 * 
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */


class LinkFonts extends Model
{
    public function getLinkFonts($link_id) 
    {
        $array = array();
        $statement = $this->db->prepare("SELECT * FROM link_fonts WHERE link_id = :link_id");
        $statement->bindValue(":link_id", $link_id);
        $statement->execute();
        if($statement->rowCount() > 0) 
        {
            $result = $statement->fetch(PDO::FETCH_ASSOC);
			$array = $result;
        }
        
        return $array;
    }

    public function updateLinkFonts($link_id, $font_one, $font_two, $font_three, $font_size, $font_color) 
    {
        // Verifica se o link existe no banco de dados
        $statement = $this->db->prepare("SELECT * FROM link_fonts WHERE link_id = :link_id");
        $statement->bindValue(":link_id", $link_id);
        $statement->execute();
    
        // Se o link for encontrado, faz o update
        if ($statement->rowCount() > 0) 
        {
            $statement = $this->db->prepare("UPDATE link_fonts SET 
                font_one = :font_one,
                font_two = :font_two,
                font_three = :font_three,
                font_size = :font_size,
                font_color = :font_color,
                font_updated_at = :font_updated_at
                WHERE link_id = :link_id
            ");
    
            // Atribui os valores das variáveis de fonte
            $statement->bindValue(":font_one", $font_one);
            $statement->bindValue(":font_two", $font_two);
            $statement->bindValue(":font_three", $font_three);
            $statement->bindValue(":font_size", $font_size);
            $statement->bindValue(":font_color", $font_color);
            $statement->bindValue(":font_updated_at", date("Y-m-d H:i:s")); // Atualiza a data
    
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
    

}
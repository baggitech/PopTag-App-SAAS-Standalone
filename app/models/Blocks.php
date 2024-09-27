<?php

/**
 * A lightweight PHP MVC Framework.
 * 
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class Blocks extends Model
{
	public function createBlock($link_id, $block_type)
	{
		// Usa a expressão match para mapear o tipo de bloco ao seu valor correspondente
		$type = match($block_type) {
			'avatar'    => AVATAR,
			'heading'   => HEADING,
			'paragraph' => PARAGRAPH,
			default     => '',
		};
		
		// Verifica se o número de blocos do tipo especificado não excede o limite definido
		$statement = $this->db->prepare("SELECT * FROM blocks WHERE block_type = :block_type AND link_id = :link_id");
		$statement->bindValue(":block_type", $block_type);
		$statement->bindValue(":link_id", $link_id);
		$statement->execute();
		if($statement->rowCount() <= $type) 
		{
			// Obtém o maior valor de ordem dos blocos associados ao link
			$statement = $this->db->prepare("SELECT MAX(block_orderliness) FROM blocks WHERE link_id = :link_id");
			$statement->bindValue(":link_id", $link_id);
			$statement->execute();
			$maxOrderliness = $statement->fetchColumn();
			if($maxOrderliness !== false) 
			{
				// Insere o novo bloco no banco de dados
				$statement = $this->db->prepare("INSERT INTO blocks SET 
					link_id = :link_id,
					block_type = :block_type,
					block_orderliness = :block_orderliness
				");
				$statement->bindValue(":link_id", $link_id);
				$statement->bindValue(":block_type", $block_type);
				$statement->bindValue(":block_orderliness", $maxOrderliness + 1);
				$statement->execute();

				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{	
			return false;
		}

	}

    public function getBlocks($link_id) 
    {
        $array = array();
        $statement = $this->db->prepare("SELECT * FROM blocks WHERE link_id = :link_id ORDER BY block_orderliness ASC");
        $statement->bindValue(":link_id", $link_id);
        $statement->execute();
        if($statement->rowCount() > 0) 
        {
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
			$array = $result;
        }
        
        return $array;
    }

	public function updateBlock($link_id, $block_id) 
	{
		$statement = $this->db->prepare("SELECT * FROM blocks WHERE link_id = :link_id AND block_id = :block_id");
		$statement->bindValue(":link_id", $link_id);
		$statement->execute();
		if($statement->rowCount() > 0) 
		{
			// $statement = $this->db->prepare("UPDATE blocks SET settings = :settings WHERE block_id = :block_id");
			// $statement->bindValue(":settings", $settings);
			// $statement->bindValue(":block_id", $block_id);
			// $statement->execute();

			// return true;
		} 
		else 
		{
			return false;
		}
	}

	public function deleteBlock($block_id) 
	{
		$statement = $this->db->prepare("SELECT * FROM blocks WHERE block_id = :block_id");
		$statement->bindValue(":block_id", $block_id);
		$statement->execute();
		if($statement->rowCount() > 0) 
		{
			$statement = $this->db->prepare("DELETE FROM blocks WHERE block_id = :block_id");
			$statement->bindValue(":block_id", $block_id);
			$statement->execute();

			return true;
		} 
		else 
		{
			return false;
		}
	}

}
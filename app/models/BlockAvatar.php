<?php

/**
 * A lightweight PHP MVC Framework.
 * 
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */


class BlockAvatar extends Model
{
    public function getBlockAvatar($link_id) 
    {
        $array = array();
        $statement = $this->db->prepare("SELECT * FROM block_avatar WHERE link_id = :link_id");
        $statement->bindValue(":link_id", $link_id);
        $statement->execute();
        if($statement->rowCount() > 0) 
        {
            $result = $statement->fetch(PDO::FETCH_ASSOC);
			$array = $result;
        }
        
        return $array;
    }

    public function createBlockAvatar($link_id, $avatar_height, $avatar_width, $avatar_border_radius, $avatar_image)
    {
		// VERIFICA SE JÁ EXISTE O UM AVATAR PARA O LINK
		$statement = $this->db->prepare("SELECT * FROM block_avatar WHERE link_id = :link_id");
		$statement->bindValue(":link_id", $link_id);
		$statement->execute();
		if ($statement->rowCount() <= AVATAR) 
        {
			// INSERE O AVATAR COM DADOS BÁSICOS PARA O FUNCIONAMENTO
			$statement = $this->db->prepare("INSERT INTO block_avatar SET
                link_id = :link_id, 
                avatar_image = :avatar_image,
                avatar_height = :avatar_height,
                avatar_width = :avatar_width,
                avatar_border_radius = :avatar_border_radius,
                avatar_is_enabled = :avatar_is_enabled,
                avatar_created_at = :avatar_created_at
			");
            $statement->bindValue(":link_id", $link_id);
            $statement->bindValue(":avatar_image", $avatar_image);
            $statement->bindValue(":avatar_height", $avatar_height);
            $statement->bindValue(":avatar_width", $avatar_width);
            $statement->bindValue(":avatar_border_radius", $avatar_border_radius);
            $statement->bindValue(":avatar_is_enabled", 1);
			$statement->bindValue(":avatar_created_at", date("Y-m-d H:i:s"));
			$statement->execute();

            return true;
        }
    }

	public function updateBlockAvatar($link_id, $avatar_id, $avatar_image, $avatar_image_alt, $avatar_location_url, $avatar_target_link, $avatar_height, $avatar_width, $avatar_border_radius, 
        $avatar_border_shadow_offset_x, $avatar_border_shadow_offset_y, $avatar_border_shadow_blur, $avatar_border_shadow_spread, 
        $avatar_border_shadow_color, $avatar_border_width, $avatar_border_style, $avatar_border_color, $avatar_object_fit) 
	{
		$statement = $this->db->prepare("SELECT * FROM block_avatar WHERE link_id = :link_id");
		$statement->bindValue(":link_id", $link_id);
		$statement->execute();
		if($statement->rowCount() > 0) 
		{
            $statement = $this->db->prepare("UPDATE block_avatar SET 
            avatar_image = :avatar_image,
            avatar_image_alt = :avatar_image_alt,
            avatar_location_url = :avatar_location_url,
            avatar_target_link = :avatar_target_link,
            avatar_height = :avatar_height,
            avatar_width = :avatar_width,
            avatar_border_radius = :avatar_border_radius,
            avatar_border_shadow_offset_x = :avatar_border_shadow_offset_x,
            avatar_border_shadow_offset_y = :avatar_border_shadow_offset_y,
            avatar_border_shadow_blur = :avatar_border_shadow_blur,
            avatar_border_shadow_spread = :avatar_border_shadow_spread,
            avatar_border_shadow_color = :avatar_border_shadow_color,
            avatar_border_width = :avatar_border_width,
            avatar_border_style = :avatar_border_style,
            avatar_border_color = :avatar_border_color,
            avatar_object_fit = :avatar_object_fit,
            avatar_updated_at = :avatar_updated_at
            WHERE avatar_id = :avatar_id
        ");
            $statement->bindValue(":avatar_image", $avatar_image);
            $statement->bindValue(":avatar_image_alt", $avatar_image_alt);
            $statement->bindValue(":avatar_location_url", $avatar_location_url);
            $statement->bindValue(":avatar_target_link", $avatar_target_link);
            $statement->bindValue(":avatar_height", $avatar_height);
            $statement->bindValue(":avatar_width", $avatar_width);
            $statement->bindValue(":avatar_border_radius", $avatar_border_radius);
            $statement->bindValue(":avatar_border_shadow_offset_x", $avatar_border_shadow_offset_x);
            $statement->bindValue(":avatar_border_shadow_offset_y", $avatar_border_shadow_offset_y);
            $statement->bindValue(":avatar_border_shadow_blur", $avatar_border_shadow_blur);
            $statement->bindValue(":avatar_border_shadow_spread", $avatar_border_shadow_spread);
            $statement->bindValue(":avatar_border_shadow_color", $avatar_border_shadow_color);
            $statement->bindValue(":avatar_border_width", $avatar_border_width);
            $statement->bindValue(":avatar_border_style", $avatar_border_style);
            $statement->bindValue(":avatar_border_color", $avatar_border_color);
            $statement->bindValue(":avatar_object_fit", $avatar_object_fit);
            $statement->bindValue(":avatar_updated_at", date("Y-m-d H:i:s"));
            $statement->bindValue(":avatar_id", $avatar_id);
            
            $statement->execute();

			return true;
		} 
		else 
		{
			return false;
		}

	}

	public function enabledDisabledBlockAvatar($link_id, $avatar_id, $avatar_is_enabled)
	{
		$statement = $this->db->prepare("UPDATE block_avatar SET 
            avatar_is_enabled = :avatar_is_enabled 
            WHERE link_id = :link_id AND avatar_id = :avatar_id
        ");
		$statement->bindValue(":link_id", $link_id);
        $statement->bindValue(":avatar_id", $avatar_id);
        $statement->bindValue(":avatar_is_enabled", $avatar_is_enabled);
		$statement->execute();

		return true;
	}

	public function deleteBlockAvatar($avatar_id) 
	{
		$statement = $this->db->prepare("SELECT * FROM block_avatar WHERE avatar_id = :avatar_id");
		$statement->bindValue(":avatar_id", $avatar_id);
		$statement->execute();
		if($statement->rowCount() > 0) 
		{
			$statement = $this->db->prepare("DELETE FROM block_avatar WHERE avatar_id = :avatar_id");
			$statement->bindValue(":avatar_id", $avatar_id);
			$statement->execute();

			return true;
		} 
		else 
		{
			return false;
		}
	}

}
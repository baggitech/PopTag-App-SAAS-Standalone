<?php

/**
 * A lightweight PHP MVC Framework.
 * 
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */


class Dashboard extends Model
{
    public function getAllLinksByUserID($user_id) 
    {
        $array = array();
        $statement = $this->db->prepare("SELECT * FROM links WHERE user_id = :user_id");
        $statement->bindValue(":user_id", $user_id);
        $statement->execute();
        if($statement->rowCount() > 0) 
        {
            $result = $statement->rowCount();
            $array = $result;
        }
        
        return $array;
    }

    public function getAllQRCodesByUserID($user_id) 
    {
        $array = array();
        $statement = $this->db->prepare("SELECT * FROM qrcodes 
            INNER JOIN links ON links.user_id = qrcodes.user_id 
            WHERE qrcodes.user_id = :user_id"
        );
        $statement->bindValue(":user_id", $user_id);
        $statement->execute();
        if($statement->rowCount() > 0) 
        {
            $result = $statement->rowCount();
            $array = $result;
        }
        
        return $array;
    }

}
<?php

/**
 * A lightweight PHP MVC Framework.
 * 
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class Themes extends Model
{
    /**
    * 
    * This is ok -- 23-01-2023 00:57
    * Start get all Themes
    * @dev HB
    *  
    */
    public function getAllThemes() 
    {
        $array = array();
        $statement = $this->db->prepare("SELECT * FROM link_themes");
        $statement->execute();
        if($statement->rowCount() > 0) 
        {
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            $array = $result;
        }
        
        return $array;
    }

    // ------------------------------------------------------------

    /**
    * 
    * This is ok -- 23-01-2023 14:22
    * Start get all Themes Category
    * @dev HB
    *  
    */
    public function getAllThemesCategory() 
    {
        $array = array();
        $statement = $this->db->prepare("SELECT * FROM link_themes GROUP BY type");
        $statement->execute();
        if($statement->rowCount() > 0) 
        {
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            $array = $result;
        }
        
        return $array;
    }

    // ------------------------------------------------------------


}
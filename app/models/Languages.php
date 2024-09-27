<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class Languages extends Model
{
    public function getLanguage() 
    {
        $array = array();
        $statement = $this->db->prepare("SELECT * FROM languages");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) 
        {
            $array[$row['prefix']] = $row['pt'];
        }

        return $array;
    }
}


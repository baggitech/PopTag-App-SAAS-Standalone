<?php
/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class ShortName extends Model
{

    public function firstNameLastName($name)
    {
        $name = explode(" ", $name);
        $firstName = array_shift($name);
        $lastName = array_pop($name);
        $name = $firstName." ".$lastName;

        $_SESSION['short_name'] = $name;

        return $name;

    }

}
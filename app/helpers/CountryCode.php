<?php
/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class CountryCode extends Model
{
    public function getCountryCode() 
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $details = json_decode(file_get_contents("https://ipinfo.io/" . $ip . "?token=c1686f487aa136"));

        //$details->city;
        //$details->region;
        //$details->country;

        return $details->city . ', ' . $details->region . ' - ' . $details->country;

    }
}
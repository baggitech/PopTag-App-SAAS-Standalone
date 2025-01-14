<?php
/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class UTMGenerator extends Model
{
	public function generatingUTM($utm_source, $utm_medium, $utm_campaign, $utm_id, $utm_term, $utm_content)
	{
		$generated_utm = "";

		if (!empty($utm_source))
		{
		    $generated_utm .= '?'.'utm_source'.'='.$utm_source;

		    if (!empty($utm_medium))
		    {
				$generated_utm .= '&'.'utm_medium'.'='.$utm_medium;
			}
			if (!empty($utm_campaign))
			{
				$generated_utm .= '&'.'utm_campaign'.'='.$utm_campaign;
			}
			if (!empty($utm_id))
			{
				$generated_utm .= '&'.'utm_id'.'='.$utm_id;
			}
			if (!empty($utm_term))
			{
				$generated_utm .= '&'.'utm_term'.'='.$utm_term;
			}
			if (!empty($utm_content))
			{
				$generated_utm .= '&'.'utm_content'.'='.$utm_content;
			}
		}

		return $generated_utm;
	}
}
<?php

/**
 * A lightweight PHP MVC Framework.
 * 
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */


class LinkSeo extends Model
{
    public function getLinkSeo($link_id) 
    {
        $array = array();
        $statement = $this->db->prepare("SELECT * FROM link_seo WHERE link_id = :link_id");
        $statement->bindValue(":link_id", $link_id);
        $statement->execute();
        if($statement->rowCount() > 0) 
        {
            $result = $statement->fetch(PDO::FETCH_ASSOC);
			$array = $result;
        }
        
        return $array;
    }

	public function linkSeoUpdate($link_id, $seo_robots, $seo_title, $seo_meta_description, $seo_meta_keywords, $seo_favicon) 
	{
		$statement = $this->db->prepare("SELECT * FROM link_seo WHERE link_id = :link_id");
		$statement->bindValue(":link_id", $link_id);
		$statement->execute();
		if($statement->rowCount() > 0) 
		{
			$statement = $this->db->prepare("UPDATE link_seo SET 
			seo_robots	= :seo_robots,
            seo_title    = :seo_title,
            seo_meta_description    = :seo_meta_description,
            seo_meta_keywords    = :seo_meta_keywords,
            seo_favicon    = :seo_favicon,
            seo_updated_at = :seo_updated_at
				WHERE link_id = :link_id
			");
			$statement->bindValue(":seo_robots", $seo_robots);
            $statement->bindValue(":seo_title", $seo_title);
            $statement->bindValue(":seo_meta_description", $seo_meta_description);
            $statement->bindValue(":seo_meta_keywords", $seo_meta_keywords);
            $statement->bindValue(":seo_favicon", $seo_favicon);
            $statement->bindValue(":seo_updated_at", date("Y-m-d H:i:s"));
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
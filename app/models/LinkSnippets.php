<?php

/**
 * A lightweight PHP MVC Framework.
 * 
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */


class LinkSnippets extends Model
{
    public function getLinkSnippets($link_id) 
    {
        $array = array();
        $statement = $this->db->prepare("SELECT * FROM link_snippets WHERE link_id = :link_id");
        $statement->bindValue(":link_id", $link_id);
        $statement->execute();
        if($statement->rowCount() > 0) 
        {
            $result = $statement->fetch(PDO::FETCH_ASSOC);
			$array = $result;
        }
        
        return $array;
    }

    public function updateLinkSnippets($link_id, $snippet_head, $snippet_body, $snippet_footer) 
    {
        // Verifica se o link existe no banco de dados
        $statement = $this->db->prepare("SELECT * FROM link_snippets WHERE link_id = :link_id");
        $statement->bindValue(":link_id", $link_id);
        $statement->execute();
    
        // Se o link for encontrado, faz o update
        if ($statement->rowCount() > 0) 
        {
            $statement = $this->db->prepare("UPDATE link_snippets SET 
                snippet_head = :snippet_head,
                snippet_body = :snippet_body,
                snippet_footer = :snippet_footer,
                snippet_updated_at = :snippet_updated_at
                WHERE link_id = :link_id
            ");
    
            // Atribui os valores das variáveis de fonte
            $statement->bindValue(":snippet_head", $snippet_head);
            $statement->bindValue(":snippet_body", $snippet_body);
            $statement->bindValue(":snippet_footer", $snippet_footer);
            $statement->bindValue(":snippet_updated_at", date("Y-m-d H:i:s")); // Atualiza a data
            $statement->bindValue(":link_id", $link_id);
            $statement->execute();
    
            return true;
        } 
        else 
        {
            return false; // Retorna falso se o link não for encontrado
        }
    }
    
}
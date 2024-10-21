<?php

function getLinkSettings($db, $url)
{
    $array = array();
    $sql = "SELECT * FROM links
            LEFT JOIN link_domain ON links.link_id = link_domain.link_id
            LEFT JOIN link_seo ON links.link_id = link_seo.link_id
            LEFT JOIN link_fonts ON links.link_id = link_fonts.link_id
            LEFT JOIN link_background ON links.link_id = link_background.link_id
            LEFT JOIN link_snippets ON links.link_id = link_snippets.link_id   
            WHERE link_name = :link_name";
    $statement = $db->prepare($sql);
    $statement->bindParam(':link_name', $url, PDO::PARAM_STR);
    $statement->execute();
    if ($statement->rowCount() > 0) 
    {
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        $array = $result;

        $_SESSION['link_id'] = $result['link_id'];
        $_SESSION['link_name'] = $result['link_name'];
        $_SESSION['link_is_enabled'] = $result['link_is_enabled'];
        $_SESSION['link_password'] = $result['link_password'];
    }

    // Retorna os resultados
    return $array;
}

function getLinkAvatar($db, $link_name)
{
    $array = array();
    $sql = "SELECT * FROM links
            LEFT JOIN blocks ON links.link_id = blocks.link_id
            LEFT JOIN block_avatar ON links.link_id = block_avatar.link_id                      
            WHERE link_name = :link_name 
            ORDER BY block_orderliness";
    $statement = $db->prepare($sql);
    $statement->bindParam(':link_name', $link_name, PDO::PARAM_STR);
    $statement->execute();
    if ($statement->rowCount() > 0) 
    {
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        $array = $result;
    }

    // Retorna os resultados
    return $array;
}

<?php

/**
 * A lightweight PHP MVC Framework.
 * 
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class Link extends Model
{
	// Obter todos os links do usuário logado
	public function getLinksAndDomainsByUserId($user_id)
	{
		$array = array();
		$statement = $this->db->prepare("SELECT * FROM links 
			LEFT JOIN link_domain ON links.link_id = link_domain.link_id 
			WHERE links.user_id = :user_id
		");
		$statement->bindValue(":user_id", $user_id);
		$statement->execute();
		if ($statement->rowCount() > 0) {
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			$array = $result;
		}

		return $array;
	}
	// Criar sessão para o "link_id"
	public function getLinkNameByLinkId($link_id)
	{
		$array = array();
		$statement = $this->db->prepare("SELECT * FROM links WHERE link_id = :link_id");
		$statement->bindValue(":link_id", $link_id);
		$statement->execute();
		if ($statement->rowCount() > 0) 
		{
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			$array = $result;
			$_SESSION['link_id'] = $result['link_id'];
		}

		return $array;
	}
	// obter todos os dados de configuração de um link de acordo com a sessão do "link_id"
	public function getAllTablesByLinkId($link_id)
	{
		$array = array();
		$statement = $this->db->prepare("SELECT * FROM links
			LEFT JOIN link_domain ON links.link_id = link_domain.link_id
			LEFT JOIN link_seo ON links.link_id = link_seo.link_id
			LEFT JOIN link_fonts ON links.link_id = link_fonts.link_id
			LEFT JOIN link_background ON links.link_id = link_background.link_id    
			WHERE links.link_id = :link_id
		");
		$statement->bindValue(":link_id", $link_id);
		$statement->execute();
		if ($statement->rowCount() > 0) 
		{
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			$array = $result;			
		}
	
		return $array;
	}










	// ESSE FICA
	public function getAllLinksIsEnabledByUserID($user_id)
	{
		$result = 0;
		$statement = $this->db->prepare("SELECT COUNT(*) AS count FROM links WHERE user_id = :user_id AND link_is_enabled = :link_is_enabled");
		$statement->bindValue(":user_id", $user_id);
		$statement->bindValue(":link_is_enabled", intval(1));
		$statement->execute();
		$row = $statement->fetch(PDO::FETCH_ASSOC);
		if ($row) {
			$result = $row['count'];
		}

		return $result;
	}

	// ESSE FICA
	public function getAllLinksIsDisabledByUserID($user_id)
	{
		$result = 0;
		$statement = $this->db->prepare("SELECT COUNT(*) AS count FROM links WHERE user_id = :user_id AND link_is_enabled = :link_is_enabled");
		$statement->bindValue(":user_id", $user_id);
		$statement->bindValue(":link_is_enabled", intval(0));
		$statement->execute();
		if ($statement->rowCount() > 0) {
			$row = $statement->fetch(PDO::FETCH_ASSOC);
			$result = $row['count'];
		}

		return $result;
	}

	// ESSE FICA
	public function linkCreate($user_id, $link_name, $domain_name)
	{
		// VERIFICA SE JÁ EXISTE O LINK
		$statement = $this->db->prepare("SELECT * FROM links WHERE link_name = :link_name");
		$statement->bindValue(":link_name", $link_name);
		$statement->execute();
		if ($statement->rowCount() == 0) {
			// INSERE O LINK COM DADOS BÁSICOS PARA O FUNCIONAMENTO
			$statement = $this->db->prepare("INSERT INTO links SET 
				link_name = :link_name,
				user_id = :user_id,
				link_type = :link_type,
				link_is_enabled = :link_is_enabled,
				link_created_at = :link_created_at,
				link_updated_at = :link_updated_at
			");
			$statement->bindValue(":link_name", $link_name);
			$statement->bindValue(":user_id", $user_id);
			$statement->bindValue(":link_type", "biolink");
			$statement->bindValue(":link_is_enabled", 1);
			$statement->bindValue(":link_created_at", date("Y-m-d H:i:s"));
			$statement->bindValue(":link_updated_at", date("Y-m-d H:i:s"));
			$statement->execute();

			// VERIFICA QUAL O ID DO LINK (link_id) E O ID DO USUÁRIO (user_id)
			// PARA USAR NAS TABELAS: (links_settings, pixels, tracks, domains, seo) 
			$statement = $this->db->prepare("SELECT * FROM links WHERE link_name = :link_name");
			$statement->bindValue(":link_name", $link_name);
			$statement->execute();
			if ($statement->rowCount() > 0) {
				$result = $statement->fetch(PDO::FETCH_ASSOC);
				// $user_id = $result['user_id'];
				$link_id = $result['link_id'];
			}

			// INSERE O ID DO LINK NA TABELA DE DOMÍNIO DO LINK
			$statement = $this->db->prepare("INSERT INTO link_domain SET 
				link_id = :link_id,
				domain_name = :domain_name,
				domain_created_at = :domain_created_at,
				domain_updated_at = :domain_updated_at
			");
			$statement->bindValue(":link_id", $link_id);
			$statement->bindValue(":domain_name", $domain_name);
			$statement->bindValue(":domain_created_at", date("Y-m-d H:i:s"));
			$statement->bindValue(":domain_updated_at", date("Y-m-d H:i:s"));
			$statement->execute();

			// INSERE O ID DO LINK NA TABELA DE SEO DO LINK
			$statement = $this->db->prepare("INSERT INTO link_seo SET 
				link_id = :link_id,
				seo_created_at = :seo_created_at,
				seo_updated_at = :seo_updated_at
			");
			$statement->bindValue(":link_id", $link_id);
			$statement->bindValue(":seo_created_at", date("Y-m-d H:i:s"));
			$statement->bindValue(":seo_updated_at", date("Y-m-d H:i:s"));
			$statement->execute();

			// INSERE O ID DO LINK NA TABELA DE FONTS DO LINK
			$statement = $this->db->prepare("INSERT INTO link_fonts SET 
				link_id = :link_id,
				font_created_at = :font_created_at,
				font_updated_at = :font_updated_at
			");
			$statement->bindValue(":link_id", $link_id);
			$statement->bindValue(":font_created_at", date("Y-m-d H:i:s"));
			$statement->bindValue(":font_updated_at", date("Y-m-d H:i:s"));
			$statement->execute();

			// INSERE O ID DO LINK NA TABELA DE BACKGROUN DO LINK
			$statement = $this->db->prepare("INSERT INTO link_background SET 
				link_id = :link_id,
				background_created_at = :background_created_at,
				background_updated_at = :background_updated_at
			");
			$statement->bindValue(":link_id", $link_id);
			$statement->bindValue(":background_created_at", date("Y-m-d H:i:s"));
			$statement->bindValue(":background_updated_at", date("Y-m-d H:i:s"));
			$statement->execute();

			// INSERE O ID DO LINK NA TABELA DE TRAQUEAMENTO DO LINK
			// $statement = $this->db->prepare("INSERT INTO link_track SET 
			// 	link_id = :link_id,
			// 	track_created_at = :track_created_at
			// ");
			// $statement->bindValue(":link_id", $link_id);
			// $statement->bindValue(":track_created_at", date("Y-m-d H:i:s"));
			// $statement->execute();

			return true;
		} 
		else 
		{
			return false;
		}
	}

	public function enabledDisabledLink($link_id, $link_is_enabled)
	{
		$statement = $this->db->prepare("UPDATE links SET link_is_enabled = :link_is_enabled WHERE link_id = :link_id
		");
		$statement->bindValue(":link_is_enabled", $link_is_enabled);
		$statement->bindValue(":link_id", $link_id);        
		$statement->execute();

		return true;
	}

	public function linkNameUpdate($link_id, $link_name, $domain_name)
	{
		// RESPONSÁVEL POR VERIFICAR SE O NOVO NOME DADO AO CAMPO (link_name) 
		// JÁ EXISTE RELACIONADO A UM (link_id) DIFERENTE
		$statement = $this->db->prepare("SELECT * FROM links WHERE link_name = :link_name AND link_id != :link_id");
		$statement->bindValue(":link_name", $link_name);
		$statement->bindValue(":link_id", $link_id);
		$statement->execute();
		if ($statement->rowCount() == 0) {
			$statement = $this->db->prepare("UPDATE links SET 
				link_name = :link_name,
				link_updated_at = :link_updated_at
				WHERE link_id = :link_id
			 ");
			$statement->bindValue(":link_name", $link_name);
			$statement->bindValue(":link_id", $link_id);
			$statement->bindValue(":link_updated_at", date("Y-m-d H:i:s"));
			$statement->execute();

			$statement = $this->db->prepare("UPDATE link_domain SET 
				domain_name = :domain_name,
				domain_updated_at = :domain_updated_at
				WHERE link_id = :link_id
			 ");
			$statement->bindValue(":domain_name", $domain_name);
			$statement->bindValue(":link_id", $link_id);
			$statement->bindValue(":domain_updated_at", date("Y-m-d H:i:s"));
			$statement->execute();

			return true;
		} else {
			return false;
		}
	}

	public function deleteLink($link_id)
	{
		$statement = $this->db->prepare("SELECT * FROM links WHERE link_id = :link_id");
		$statement->bindValue(":link_id", $link_id);
		$statement->execute();
		if ($statement->rowCount() > 0) 
		{
			$statement = $this->db->prepare("DELETE FROM links WHERE link_id = :link_id");
			$statement->bindValue(":link_id", $link_id);
			$statement->execute();

			$statement = $this->db->prepare("DELETE FROM qrcodes WHERE link_id = :link_id");
			$statement->bindValue(":link_id", $link_id);
			$statement->execute();

			$statement = $this->db->prepare("DELETE FROM pixels WHERE link_id = :link_id");
			$statement->bindValue(":link_id", $link_id);
			$statement->execute();

			$statement = $this->db->prepare("DELETE FROM link_domain WHERE link_id = :link_id");
			$statement->bindValue(":link_id", $link_id);
			$statement->execute();

			$statement = $this->db->prepare("DELETE FROM link_seo WHERE link_id = :link_id");
			$statement->bindValue(":link_id", $link_id);
			$statement->execute();

			$statement = $this->db->prepare("DELETE FROM link_fonts WHERE link_id = :link_id");
			$statement->bindValue(":link_id", $link_id);
			$statement->execute();

			$statement = $this->db->prepare("DELETE FROM link_background WHERE link_id = :link_id");
			$statement->bindValue(":link_id", $link_id);
			$statement->execute();

			$statement = $this->db->prepare("DELETE FROM link_track WHERE link_id = :link_id");
			$statement->bindValue(":link_id", $link_id);
			$statement->execute();

			$statement = $this->db->prepare("DELETE FROM blocks WHERE link_id = :link_id");
			$statement->bindValue(":link_id", $link_id);
			$statement->execute();

			$statement = $this->db->prepare("DELETE FROM block_avatar WHERE link_id = :link_id");
			$statement->bindValue(":link_id", $link_id);
			$statement->execute();

			// IMPLEMENTAÇÕES:
			// DELETAR ARQUIVOS DE IMAGENS GERADOS PELO SISTEMA QUE PERTENCEM AO LINK
			// DELETAR ARQUIVOS DE IMAGENS INSERIDOS PELO USUÁRIO QUE PERTENCEM AO LINK
			// DELETAR BASE DE DADOS DE SHORTLINKS QUE PERTENCEM AO LINK

			return true;
		} 
		else 
		{
			return false;
		}
	}





















}

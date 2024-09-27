<?php
/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class BackgroundColor extends Model
{
	public function optionBackgroundColor($bg_type, $bg_id)
	{
			if($bg_type == "gradient")
			{
				switch ($bg_id)
				{
					case "one":
					$color1 = "#a529b9";
					$color2 = "#50b1e1";
					$to_direction = "to bottom";
					break;

					case "two":
					$color1 = "#ffb418";
					$color2 = "#f73131";
					$to_direction = "to bottom";
					break;

					case "three":
					$color1 = "#79F1A4";
					$color2 = "#0E5CAD";
					$to_direction = "to bottom";
					break;

					case "four":
					$color1 = "#ff758c";
					$color2 = "#ff7eb3";
					$to_direction = "to bottom";
					break;

					case "five":
					$color1 = "#3355ff";
					$color2 = "#0088ff";
					$to_direction = "to bottom";
					break;

					case "six":
					$color1 = "#fc5c7d";
					$color2 = "#6a82fb";
					$to_direction = "to bottom";
					break;

					case "seven":
					$color1 = "#414345";
					$color2 = "#232526";
					$to_direction = "to bottom";
					break;

					case "eight":
					$color1 = "#44A08D";
					$color2 = "#093637";
					$to_direction = "to bottom";
					break;

					default:
					$color1 = "#ffffff";
					$color2 = "#ffffff";
					$to_direction = "to bottom";
				}

				// Nome do arquivo no banco de dados
				$background_image = $data['link_setting']['background_image'];

				if($background_image !== null)
				{
					// Caminho absoluto para o arquivo de imagem a ser excluído
			       	$filePath = __DIR__ . '/../../uploads/' . $background_image;

			       	// Verifica se o arquivo existe antes de tentar excluir
				    if (file_exists($filePath)) 
				    {
			       		unlink($filePath);
			       	}	
				}
						
				$background_image = null;					
			}
			elseif($bg_type == "custom")
			{
				$bg_id  = "nine";
				$color1 = $_POST['color1'];
				$color2 = $_POST['color2'];
				$to_direction = $_POST['to_direction'];

				// Nome do arquivo no banco de dados
				$background_image = $data['link_setting']['background_image'];

				if($background_image != null)
				{
					// Caminho absoluto para o arquivo de imagem a ser excluído
			       	$filePath = __DIR__ . '/../../../public_html/uploads/biolinks/backgrounds/' . $background_image;

			       	// Verifica se o arquivo existe antes de tentar excluir
				    if (file_exists($filePath)) 
				    {
			       		unlink($filePath);
			       	}	
				}
						
				$background_image = null;
			}
			elseif($bg_type == "image")
			{
				$bg_id  = null;
				$color1 = null;
				$color2 = null;
				$to_direction = null;

				$path = $_FILES['background_image']['name'];
		    	$path_tmp = $_FILES['background_image']['tmp_name'];
		    	$mime = $_FILES['background_image']['type'];			

			   	if(!empty($path))
			   	{
				    if($mime !='image/jpeg' && $mime !='image/png' && $mime !='image/gif')
				    {
				    	$error_message = "Tipo de arquivo não aceito!";
				    	$_SESSION['error_message'] = $error_message;
				    	header("Location: ".URL_PATH."link/edit/".$link_id);
				    	exit;
				    }
				    else
				    {
				    	$url = $data['link']['url'];
				        if($mime == 'image/jpeg') {$ext = 'jpeg';}
				        elseif($mime == 'image/png') {$ext = 'png';}
				        elseif($mime == 'image/gif') {$ext = 'gif';}
				        $background_image = 'bg-'.$url.'.'.$ext;
				        $local = (__DIR__ . '/../../../public_html/uploads/biolinks/backgrounds/');
				        move_uploaded_file($path_tmp, $local.$background_image);
				    }	    			
			   	}
				else
				{
				   	$background_image = $data['link_setting']['background_image'];
				}
			}
		
	}
}
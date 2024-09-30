<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'link_background_update') 
{
    if (isset($_POST['token']) && !hash_equals($_SESSION['csrf_token'], $_POST['token'])) 
    {
        // Define a mensagem de erro e redireciona
        $_SESSION['error_message'] = "Token inválido. Tente novamente.";
        header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
        exit;
    } 
    else 
    {
        // STANDARD ON ALL FORMS
        $input_data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $user_id = $user_id ?? null;
        $link_id = $input_data['link_id'] ?? null;

        // INPUTS DO FORMULÁRIO        
        $background_type = $input_data['background_type'] ?? null;
        $background_color_code = $input_data['background_color_code'] ?? null;
        $background_color_one = $input_data['background_color_one'] ?? null;
        $background_color_two = $input_data['background_color_two'] ?? null;
        $background_to_direction = $input_data['background_to_direction'] ?? null;
        $background_image = $input_data['background_image'] ?? null;

        // echo "<pre>";
        // var_dump($input_data);
        // die;
        // echo "<pre>";

		if(!empty($background_type))
		{
			if($background_type == "gradient")
			{
				switch ($background_color_code)
				{
					case "one":
					$background_color_one = "#a529b9";
					$background_color_two = "#50b1e1";
					$background_to_direction = "to bottom";
					break;

					case "two":
					$background_color_one = "#ffb418";
					$background_color_two = "#f73131";
					$background_to_direction = "to bottom";
					break;

					case "three":
					$background_color_one = "#79F1A4";
					$background_color_two = "#0E5CAD";
					$background_to_direction = "to bottom";
					break;

					case "four":
					$background_color_one = "#ff758c";
					$background_color_two = "#ff7eb3";
					$background_to_direction = "to bottom";
					break;

					case "five":
					$background_color_one = "#3355ff";
					$background_color_two = "#0088ff";
					$background_to_direction = "to bottom";
					break;

					case "six":
					$background_color_one = "#fc5c7d";
					$background_color_two = "#6a82fb";
					$background_to_direction = "to bottom";
					break;

					case "seven":
					$background_color_one = "#414345";
					$background_color_two = "#232526";
					$background_to_direction = "to bottom";
					break;

					case "eight":
					$background_color_one = "#44A08D";
					$background_color_two = "#093637";
					$background_to_direction = "to bottom";
					break;

					default:
					$background_color_one = "#ffffff";
					$background_color_two = "#ffffff";
					$background_to_direction = "to bottom";
				}

				$current_background_image = $data['link_background']['background_image'];

				if($current_background_image !== null)
				{
			       	$filePath = __DIR__ . '/../../../biolink/uploads/background/' . $current_background_image;

				    if (file_exists($filePath)) 
				    {
			       		unlink($filePath);
			       	}	
				}
                else
                {
                    $background_image = null;
                }									
			}
			elseif($background_type == "custom")
			{
				$background_color_code  = "nine";
				// $background_color_one = $_POST['background_color_one'];
				// $background_color_two = $_POST['background_color_two'];
				// $background_to_direction = $_POST['background_to_direction'];

				// Nome do arquivo no banco de dados
				$background_image = $data['link_background']['background_image'];

				if($background_image !== null)
				{
                    $filePath = __DIR__ . '/../../../biolink/uploads/background/' . $current_background_image;

				    if (file_exists($filePath)) 
				    {
			       		unlink($filePath);
			       	}	
				}
                else
                {
                    $background_image = null;
                }
			}
			elseif($background_type == "image")
			{
				$background_color_code  = null;
				$background_color_one = null;
				$background_color_two = null;
				$background_to_direction = null;

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
				    	$link_name = $data['link']['link_name'];
				        if($mime == 'image/jpeg') {$ext = 'jpeg';}
				        elseif($mime == 'image/png') {$ext = 'png';}
				        elseif($mime == 'image/gif') {$ext = 'gif';}
				        $background_image = $link_name.'.'.$ext;
				        $local = (__DIR__ . '/../../../biolink/uploads/background/');
				        move_uploaded_file($path_tmp, $local . $background_image);
				    }	    			
			   	}
				else
				{
				   	$background_image = $data['link_background']['background_image'];
				}
			}
		}

        $background_ok = $class_link_background->updateLinkBackground($link_id, $background_type, $background_color_code, $background_color_one, $background_color_two, $background_to_direction, $background_image);

		if($background_ok)
		{
			$_SESSION['success_message'] = "Atualizado com sucesso!";
			header("Location: ".URL_PATH."link/edit/".$link_id);
			exit;
		}
		else
	  	{
	    	$_SESSION['error_message'] = "Erro ao atualizar!";
	    	header("Location: ".URL_PATH."link/edit/".$link_id);
	    	exit;	    			
		}






    }
}


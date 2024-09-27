<?php
if (isset($_POST['form_pixel_create'])) {
	// Verifica se o token CSRF é válido
	if (!isset($_POST['token']) || !hash_equals($_SESSION['csrf_token'], $_POST['token'])) {
		$error_message = "Token inválido. Tente novamente.";
		$_SESSION['error_message'] = $error_message;
		header("Location: " . URL_PATH . "pixel");
		exit;
	} else {
		$pixel_name = filter_input(INPUT_POST, 'pixel_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$link_id = filter_input(INPUT_POST, 'link_id', FILTER_SANITIZE_NUMBER_INT);
		$pixel_platform = filter_input(INPUT_POST, 'pixel_platform', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$pixel_is_enabled = filter_input(INPUT_POST, 'pixel_is_enabled', FILTER_VALIDATE_INT);
		$pixel_date_time = date("Y-m-d H:i:s");

		if (!empty($link_id)) {
			$link_id = (int) $link_id;
		} else {
			$error_message = "Necessário escolher um Link!";
			$_SESSION['error_message'] = $error_message;
			header("Location: " . URL_PATH . "pixel");
			exit;
		}

		// Verifica se a variável $pixel_name está vazia
		if (empty($pixel_name)) {
			// Se a variável $pixel_platform também estiver vazia, significa 
			// que nenhum tipo foi selecionado
			if (empty($pixel_platform)) {
				$error_message = "Necessário escolher um Tipo!";
				$_SESSION['error_message'] = $error_message;
				header("Location: " . URL_PATH . "pixel");
				exit;
			} else {
				// Define o valor da variável $pixel_name com base no valor de $pixel_platform
				$pixel_name = ucwords(str_replace("_", " ", $pixel_platform)) . ' - ' . uniqid();
			}
		}

		$social_media = array(
			'facebook' => 'facebook.svg',
			'google_analytics' => 'google-analytics.svg',
			'google_tag_manager' => 'google-tag-manager.svg',
			'linkedin' => 'linkedin.svg',
			'pinterest' => 'pinterest.svg',
			'twitter' => 'twitter.svg',
			'quora' => 'quora.svg',
			'tiktok' => 'tiktok.svg',
		);
		if (array_key_exists($pixel_platform, $social_media)) {
			$pixel_social_media = $social_media[$pixel_platform];
		} else {
			$error_message = "A chave não existe no array social_media";
			$_SESSION['error_message'] = $error_message;
			header("Location: " . URL_PATH . "pixel");
			exit;
		}
		if ($class_pixel->addPixel($user_id, $pixel_name, $link_id, $pixel_platform, $pixel_is_enabled, $pixel_date_time, $pixel_social_media)) {
			$success_message = "Pixel adicionado com sucesso!";
			$_SESSION['success_message'] = $success_message;
			header("Location: " . URL_PATH . "pixel");
			exit;
		} else {
			$error_message = "Pixel já existe!";
			$_SESSION['error_message'] = $error_message;
			header("Location: " . URL_PATH . "pixel");
			exit;
		}
	}
}

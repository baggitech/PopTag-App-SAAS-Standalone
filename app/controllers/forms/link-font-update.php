<?php
if (isset($_POST['form_']) && $_POST['form_'] == 'link_font_update') 
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
        $font_one = $input_data['font_one'] ?? null;
        $font_two = $input_data['font_two'] ?? null;
        $font_three = $input_data['font_three'] ?? null;
        $font_size = $input_data['font_size'] ?? null;
        $font_color = $input_data['font_color'] ?? null;
        
        $link_font_update = $class_link_font->updateLinkFonts($link_id, $font_one, $font_two, $font_three, $font_size, $font_color);

        if($link_font_update)
        {
            // Define a mensagem de erro e redireciona
            $_SESSION['success_message'] = 'Fontes atualizadas com sucesso!';
            header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
            exit;
        }
        else
        {
            // Define a mensagem de erro e redireciona
            $_SESSION['error_message'] = 'Fonts não puderam ser atualizadas!';
            header('Location: ' . URL_PATH . 'link/edit/' . $link_id);
            exit;	    			
        }
    }
}

  <style type="text/css">
    
    /* Ocultar as barras de rolagem */
    ::-webkit-scrollbar {
      width: 0px;
    }

    /* Ocultar o polegar da barra de rolagem */
    ::-webkit-scrollbar-thumb {
      display: none;
    }

    /* Ocultar a trilha da barra de rolagem */
    ::-webkit-scrollbar-track {
      display: none;
    }

    html, 
    body {
      font-family: "Helvetica Neue", Arial, sans-serif;
      font-size: 16px;
      color: #000000;
    }

    <?php if ($result['background_type'] == "gradient"): ?>

    .link-body {
      font-family: "<?= $result['font_one'] ?? ''; ?>", <?= $result['font_two'] ?? ''; ?>, <?= $result['font_three'] ?? ''; ?>, sans-serif !important;
      font-size: <?= $result['font_size'] ?? ''; ?>px !important;
      color: <?= $result['font_color'] ?? ''; ?> !important;
      background: linear-gradient(<?= $result['background_to_direction'] ?? ''; ?>, <?= $result['background_color_one'] ?? ''; ?>, <?= $result['background_color_two'] ?? ''; ?>);
      background-attachment: scroll;
    }

    <?php elseif ($result['background_type'] == "custom"): ?>

    .link-body {
      font-family: "<?= $result['font_one'] ?? ''; ?>", <?= $result['font_two'] ?? ''; ?>, <?= $result['font_three'] ?? ''; ?>, sans-serif !important;
      font-size: <?= $result['font_size'] ?? ''; ?>px !important;
      color: <?= $result['font_color'] ?? ''; ?> !important;
      background: linear-gradient(<?= $result['background_to_direction'] ?? ''; ?>, <?= $result['background_color_one'] ?? ''; ?>, <?= $result['background_color_two'] ?? ''; ?>);
      background-attachment: scroll;
    }

    <?php elseif ($result['background_type'] == "image"): ?>

    .link-body {
      font-family: "<?= $result['font_one'] ?? ''; ?>", <?= $result['font_two'] ?? ''; ?>, <?= $result['font_three'] ?? ''; ?>, sans-serif !important;
      font-size: <?= $result['font_size'] ?? ''; ?>px !important;
      color: <?= $result['font_color'] ?? ''; ?> !important;
      background-image: url("http://localhost:8080/poptag.app/uploads/biolink/<?= $result['background_image'] ?? ''; ?>");
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed; /* O fundo fica fixo enquanto o conteúdo rola */
      opacity: 0.85;
    }

    <?php endif; ?>



  </style>
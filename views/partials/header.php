<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="<?= $theme['default_theme_style']; ?>" class="<?= $theme['default_theme_style']; ?>">

<head>

  <title><?= $main['title']; ?> | <?= ($page['title'] ?? 'indisponível'); ?></title>

  <base href="<?= $main['base_url']; ?>" />

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="expires" content="-1" />
  <meta http-equiv="imagetoolbar" content="no" />

  <meta name="description" content="<?= ($page['meta_description'] ?? 'indisponível'); ?>" />
  <meta name="keywords" content="<?= ($page['meta_keywords'] ?? 'indisponível'); ?>" />
  <meta name="location" content="Sao Paulo, Brazil" />
  <meta name="robots" content="<?= $main['robots']; ?>" />
  <meta name="mssmarttagspreventparsing" content="true" />
  <meta name="organization name" content="poptag.app" />
  <meta name="author" content="poptag" />
  <meta name="msapplication-TileColor" content="#6849ad" />
  <meta name="msapplication-TileImage" content="<?= ASSETS_PATH; ?>images/ms-icon-144x144.png" />
  <meta name="theme-color" content="#6849ad" />

  <meta property="og:title" content="serve para fazer a indicação do título da página que será mostrada na mídia social" />
  <meta property="og:type" content="descreve o tipo de site de web que está sendo compartilhado" />
  <meta property="og:image" content="indica a imagem que será apresentada na hora de linkar o conteúdo na rede social"/>
  <meta property="og:url" content="apresenta a url da página disponibilizada na rede social"/>
  <meta property="og:description" content="é útil para descrever de forma abreviada. Aparece logo abaixo do título"/>

  <meta name="twitter:card" content="<?= $twitter_og['card']; ?>" />
  <meta name="twitter:creator" content="<?= $twitter_og['creator']; ?>" />
  <meta name="twitter:site" content="<?= $twitter_og['site']; ?>" />
  <meta name="twitter:domain" content="<?= $twitter_og['domain']; ?>" />
  <meta name="twitter:title" content="<?= $twitter_og['title']; ?>" />
  <meta name="twitter:description" content="<?= $twitter_og['description']; ?>" />
  <meta name="twitter:image:src" content="<?= ASSETS_PATH; ?>images/<?= $twitter_og['image']; ?>" />

  <link rel="canonical" href="<?= $main['canonical']; ?>" />
  <link rel="manifest" href="<?= URL_PATH; ?>manifest.json" />

  <link rel="icon" type="image/png" href="<?= ASSETS_PATH; ?>images/favicon.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?= ASSETS_PATH; ?>images/favicon-16x16.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?= ASSETS_PATH; ?>images/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="48x48" href="<?= ASSETS_PATH; ?>images/favicon-48x48.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="<?= ASSETS_PATH; ?>images/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="144x144" href="<?= ASSETS_PATH; ?>images/favicon-144x144.png" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

  <!-- Start Vendor Generic Style -->
  <link rel="stylesheet" type="text/css" href="<?= VENDOR_PATH; ?>bootstrap/5.3.3/css/bootstrap.min.css?v=5.3.3" />
  <link rel="stylesheet" type="text/css" href="<?= VENDOR_PATH; ?>DataTables/datatables.css" />
  <link rel="stylesheet" type="text/css" href="<?= VENDOR_PATH; ?>owl.carousel/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="<?= VENDOR_PATH; ?>bootstrap-select/css/bootstrap-select.min.css" />
  <link rel="stylesheet" type="text/css" href="<?= VENDOR_PATH; ?>daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="<?= VENDOR_PATH; ?>toastr-master/build/toastr.css" />
  <!-- End Vendor Generic Style -->

  <!-- Start Theme Style -->
  <link rel="stylesheet" type="text/css" href="<?= ASSETS_PATH; ?>font-awesome/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="<?= ASSETS_PATH; ?>css/stylesheet.css" />
  <link rel="stylesheet" type="text/css" href="<?= ASSETS_PATH; ?>css/color-blue-materialize.css" />
  <link rel="stylesheet" type="text/css" href="<?= ASSETS_PATH; ?>css/custom.css" />
  <!-- End Theme Style -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ESKWDGMFHH"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-ESKWDGMFHH');
  </script>

</head>

<body>

  <!-- Start Preloader -->
  <div id="preloader">
    <div data-loader="dual-ring"></div>
  </div>
  <!-- End Preloader -->

  <div id="main-wrapper">
    <header id="header" class="sticky-lg-top">

      <?php require_once(__DIR__ . '/menu.php'); ?>

    </header>
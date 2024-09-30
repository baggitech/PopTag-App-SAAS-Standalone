<?php
ob_start();
session_start();
require_once(__DIR__ . '/includes/conn.php');
require_once(__DIR__ . '/includes/data_server.php');
?>
<!DOCTYPE html>
<html lang="pt-br" class="link-html" dir="ltr">

<head>

    <base href="<?= URL_PATH; ?><?= $result['link_name'] ?? ''; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="expires" content="-1">
    <meta http-equiv="imagetoolbar" content="no">

    <meta name="description" content="<?= $result['seo_meta_description'] ?? ''; ?>">
    <meta name="keywords" content="<?= $result['seo_meta_keywords'] ?? ''; ?>">
    <meta name="location" content="Sao Paulo, Brazil">
    <meta name="robots" content="">
    <meta name="mssmarttagspreventparsing" content="true">
    <meta name="organization name" content="poptag.app">
    <meta name="author" content="poptag">    
    <meta name="msapplication-TileImage" content="<?=URL_PATH;?>uploads/avatar/<?= $result['avatar_image' ?? '']; ?>">
    <meta name="msapplication-TileColor" content="<?= $result['background_color_one'] ?? ''; ?>">
    <meta name="theme-color" content="<?= $result['background_color_two'] ?? ''; ?>">

    <title><?= $result['seo_title'] ?? ''; ?></title>

    <meta name="description" content="<?= $result['seo_meta_description'] ?? ''; ?>">
    <meta name="keywords" content="<?= $result['seo_meta_keywords'] ?? ''; ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="<?= $result['seo_title'] ?? ''; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?=URL_PATH;?>uploads/avatar/<?= $result['avatar_image' ?? '']; ?>">
    <meta property="og:url" content="<?=URL_PATH;?><?= $result['link_name'] ?? ''; ?>">    
    <meta property="og:description" content="<?= $result['seo_meta_description'] ?? ''; ?>">    

    <!-- Open Graph / Twitter -->
    <meta property="twitter:title" content="<?= $result['seo_title'] ?? ''; ?>">
    <meta property="twitter:type" content="website">
    <meta property="twitter:image:src" content="<?=URL_PATH;?>uploads/avatar/<?= $result['avatar_image' ?? '']; ?>">
    <meta property="twitter:url" content="<?=URL_PATH;?><?= $result['link_name'] ?? ''; ?>">    
    <meta property="twitter:description" content="<?= $result['seo_meta_description'] ?? ''; ?>">
    <!-- Verificar para que serve abaixo: -->
    <meta name="twitter:card" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:domain" content="">

    <link rel="canonical" href="<?= URL_PATH; ?><?= $result['link_name'] ?? ''; ?>">
    <!-- <link rel="manifest" href="<?= URL_PATH; ?>manifest.json"> -->

    <link rel="icon" type="image/png" href="<?=URL_PATH;?>uploads/favicon/<?= $result['avatar_image' ?? '']; ?>">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="images/favicon-48x48.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="144x144" href="images/favicon-144x144.png"> -->

    <link href="assets/css/bootstrap.min.css?v=1.0.0" rel="stylesheet" media="screen,print">
    <link href="assets/css/link-custom.css?v=1.0.0" rel="stylesheet" media="screen,print">
    <link href="assets/css/animate.min.css?v=1.0.0" rel="stylesheet" media="screen,print">

    <?php require_once(__DIR__ . '/includes/link-custom.php'); ?>


</head>

<body class="link-body">


    <div class="container animate__animated animate__fadeIn">

        <div id="scroll_buttons" style="position: fixed; left: 1rem; top: 1rem; z-index: 1;">
            <div class="mb-2">
                <button type="button" class="btn share-button zoom-animation-subtle" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });" data-toggle="tooltip" data-placement="right" title="Scroll top" data-tooltip-hide-on-click>
                    <i class="fas fa-fw fa-arrow-up"></i>
                </button>
            </div>
            <div>
                <button type="button" class="btn share-button zoom-animation-subtle" onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });" data-toggle="tooltip" data-placement="right" title="Scroll bottom" data-tooltip-hide-on-click>
                    <i class="fas fa-fw fa-arrow-down"></i>
                </button>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center position-absolute share-button-wrapper">
            <button type="button" class="btn share-button zoom-animation-subtle" data-bs-toggle="modal" data-bs-target="#share" data-toggle="tooltip" title="Share">
                <i class="fas fa-fw fa-share"></i>
            </button>
        </div>

        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-8 link-content ">

                <main id="links" class="my-2">
                    <div class="row">

                    <?php if($result['avatar_is_enabled'] == 1): ?>
                        <div id="biolink_block_id_3898" data-biolink-block-id="3898" class="col-12 my-2">
                            <div class="d-flex flex-column align-items-center">
                                <a href="<?= $result['avatar_location_url'] ?? '#'; ?>" data-track-biolink-block-id="3865" target="<?= $result['avatar_target_link' ?? '']; ?>">
                                    <img src="<?=URL_PATH;?>uploads/avatar/<?= $result['avatar_image' ?? '']; ?>" class="link-image link-avatar-<?= $result['avatar_border_radius' ?? '']; ?>" style="width: <?= $result['avatar_width' ?? '']; ?>; height: <?= $result['avatar_height' ?? '']; ?>; border-width: <?= $result['avatar_border_width' ?? '']; ?>px; border-color: <?= $result['avatar_border_color' ?? '']; ?>; border-style: <?= $result['avatar_border_style' ?? '']; ?>; object-fit: <?= $result['avatar_object_fit' ?? '']; ?>;" alt="<?= $result['avatar_image_alt'] ?? ''; ?>" loading="lazy" data-border-width="" data-border-avatar-radius="" data-border-style="" data-border-color="" data-avatar="" />
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>

                    </div>
                </main>

                <footer id="footer" class="fixed-bottom link-footer">
                    <div id="branding" class="link-footer-branding"> by PopTag 👁 </div>
                </footer>

            </div>
        </div>

    </div>

    <?php require_once('includes/modal-contact.php'); ?>
    <?php require_once('includes/modal-collector.php'); ?>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

</body>

<script src="assets/js/jquery.min.js?v=1.0.0"></script>
<script src="assets/js/popper.min.js?v=1.0.0"></script>
<script src="assets/js/bootstrap.min.js?v=1.0.0"></script>
<script src="assets/js/custom.js?v=1.0.0"></script>
<script src="assets/js/fontawesome.min.js?v=1.0.0"></script>
<script src="assets/js/fontawesome-solid.min.js?v=1.0.0"></script>
<script src="assets/js/fontawesome-brands.min.js?v=1.0.0"></script>

</html>
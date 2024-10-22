<?php
ob_start();
session_start();

require_once(__DIR__ . '/includes/conn.php');
require_once(__DIR__ . '/includes/init.php');
require_once(__DIR__ . '/includes/functions.php');

if (isset($_GET['url']) && !empty($_GET['url'])) 
{
    // Obtém e sanitiza o valor 'url' da variável $_GET, removendo possíveis caracteres inválidos
    $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
    $parts = explode('/', $url);
    $url = end($parts);

    $result_link_settings = getLinkSettings($db, $url);

    if ($result_link_settings) 
    {
        $link_id = $result_link_settings['link_id'];
        $link_name = $result_link_settings['link_name'];
        $link_is_enabled = $result_link_settings['link_is_enabled'];
        $link_sensitive_content = 0;//$result_link_settings['link_sensitive_content'];
        $link_password = $result_link_settings['link_password'];

        if ($link_is_enabled) 
        {
            if ($link_sensitive_content) 
            {
                header("Location: " . URL_PATH . "login.php");
                exit;
            }
        } 
        else 
        {
            http_response_code(404);
            header("Location: " . URL_PATH . "404.html");
            exit;
        }
    } 
    else 
    {
        http_response_code(404);
        header("Location: " . URL_PATH . "404.html");
        exit;
    }

    $result_avatar = getLinkAvatar($db, $link_name);
} 
else 
{
    http_response_code(400);
    header("Location: " . URL_PATH . "400.html");
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br" class="link-html" dir="ltr">

<head>

    <base href="<?= URL_PATH; ?><?= $result_link_settings['link_name'] ?? ''; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="expires" content="-1">
    <meta http-equiv="imagetoolbar" content="no">

    <meta name="description" content="<?= $result_link_settings['seo_meta_description'] ?? ''; ?>">
    <meta name="keywords" content="<?= $result_link_settings['seo_meta_keywords'] ?? ''; ?>">
    <meta name="location" content="Sao Paulo, Brazil">
    <meta name="robots" content="">
    <meta name="mssmarttagspreventparsing" content="true">
    <meta name="organization name" content="poptag.app">
    <meta name="author" content="poptag">
    <meta name="msapplication-TileImage" content="<?= URL_PATH; ?>uploads/avatar/<?= $result_link_settings['avatar_image'] ?? ''; ?>">
    <meta name="msapplication-TileColor" content="<?= $result_link_settings['background_color_one'] ?? ''; ?>">
    <meta name="theme-color" content="<?= $result_link_settings['background_color_two'] ?? ''; ?>">

    <title><?= $result_link_settings['seo_title'] ?? ''; ?></title>

    <meta name="description" content="<?= $result_link_settings['seo_meta_description'] ?? ''; ?>">
    <meta name="keywords" content="<?= $result_link_settings['seo_meta_keywords'] ?? ''; ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="<?= $result_link_settings['seo_title'] ?? ''; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?= URL_PATH; ?>uploads/avatar/<?= $result_link_settings['avatar_image'] ?? ''; ?>">
    <meta property="og:url" content="<?= URL_PATH; ?><?= $result_link_settings['link_name'] ?? ''; ?>">
    <meta property="og:description" content="<?= $result_link_settings['seo_meta_description'] ?? ''; ?>">

    <!-- Open Graph / Twitter -->
    <meta property="twitter:title" content="<?= $result_link_settings['seo_title'] ?? ''; ?>">
    <meta property="twitter:type" content="website">
    <meta property="twitter:image:src" content="<?= URL_PATH; ?>uploads/avatar/<?= $result_link_settings['avatar_image'] ?? ''; ?>">
    <meta property="twitter:url" content="<?= URL_PATH; ?><?= $result_link_settings['link_name'] ?? ''; ?>">
    <meta property="twitter:description" content="<?= $result_link_settings['seo_meta_description'] ?? ''; ?>">
    <!-- Verificar para que serve abaixo: -->
    <meta name="twitter:card" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:domain" content="">

    <link rel="canonical" href="<?= URL_PATH; ?><?= $result_link_settings['link_name'] ?? ''; ?>">
    <!-- <link rel="manifest" href="<?= URL_PATH; ?>manifest.json"> -->

    <link rel="icon" type="image/png" href="<?= URL_PATH; ?>uploads/favicon/<?= $result_link_settings['avatar_image'] ?? ''; ?>">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="images/favicon-48x48.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="144x144" href="images/favicon-144x144.png"> -->

    <link href="../vendor/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/bootstrap/5.3.3/css/bootstrap.min.css?v=5.3.3" rel="stylesheet" media="screen,print">
    <link href="assets/css/link-custom.css?v=1.0.0" rel="stylesheet" media="screen,print">
    <link href="assets/css/animate.min.css?v=1.0.0" rel="stylesheet" media="screen,print">

    <?php require_once(__DIR__ . '/includes/link-custom.php'); ?>

    <?php
    $snippet_head = $result_link_settings['snippet_head'] ?? '';
    $snippet_head = html_entity_decode($snippet_head, ENT_QUOTES, 'UTF-8');
    echo $snippet_head;
    ?>

</head>

<body class="link-body">

    <?php
    $snippet_body = $result_link_settings['snippet_body'] ?? '';
    $snippet_body = html_entity_decode($snippet_body, ENT_QUOTES, 'UTF-8');
    echo $snippet_body;
    ?>

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

                        <?php require_once('blocks/avatar.php'); ?>

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

</body>

<script src="../vendor/jquery/3.7.1/jquery-3.7.1.min.js?v=3.7.1"></script>
<script src="../vendor/popperjs/2.11.8/dist/umd/popper.min.js?v=2.11.8"></script>
<script src="../vendor/bootstrap/5.3.3/js/bootstrap.min.js?v=5.3.3"></script>

<script src="assets/js/custom.js?v=1.0.0"></script>

<script src="../vendor/font-awesome/js/fontawesome.min.js?v=1.0.0"></script>
<script src="../vendor/font-awesome/js/fontawesome-solid.min.js?v=1.0.0"></script>
<script src="../vendor/font-awesome/js/fontawesome-brands.min.js?v=1.0.0"></script>

<script>
    'use strict';

    const toggle_scroll_buttons = () => {
        const scroll_buttons = document.getElementById('scroll_buttons');
        scroll_buttons.style.display = document.body.scrollHeight > window.innerHeight ? 'block' : 'none';
    };

    window.addEventListener('load', toggle_scroll_buttons);
    window.addEventListener('resize', toggle_scroll_buttons);
</script>

<script src="assets/js/clipboard.min.js?v=5000"></script>

<script>
    'use strict';

    let clipboard = new ClipboardJS('[data-clipboard-text],[data-clipboard-target]');

    /* Copy full url handler */
    $('[data-clipboard-text],[data-clipboard-target]').on('click', event => {
        let copy = event.currentTarget.dataset.copy;
        let copied = event.currentTarget.dataset.copied;

        $(event.currentTarget).attr('data-original-title', copied).tooltip('show');

        setTimeout(() => {
            $(event.currentTarget).attr('data-original-title', copy);
        }, 500);
    });
</script>
<script src="assets/js/jquery-qrcode.min.js?v=5000"></script>

<script>
    'use strict';

    let generate_qr = (element, data) => {
        let default_options = {
            render: 'image',
            minVersion: 1,
            maxVersion: 40,
            ecLevel: 'L',
            left: 0,
            top: 0,
            size: 1000,
            text: data,
            quiet: 0,
            mode: 0,
            mSize: 0.1,
            mPosX: 0.5,
            mPosY: 0.5,
        };

        /* Delete already existing image generated */
        element.querySelector('img') && element.querySelector('img').remove();
        $(element).qrcode(default_options);

        /* Set class to QR */
        element.querySelector('img').classList.add('w-100');
        element.querySelector('img').classList.add('rounded');
    }

    let qr_codes = document.querySelectorAll('[data-qr]');

    qr_codes.forEach(element => {
        generate_qr(element, element.getAttribute('data-qr'));
    })
</script>


<script>
    /* Background backdrop fix on modal */
    let backdrop_filter = null;
    $('.modal').on('show.bs.modal', function() {
        backdrop_filter = document.querySelector('body').style.backdropFilter;
        document.querySelector('body').style.backdropFilter = '';
    });

    $('.modal').on('hide.bs.modal', function() {
        document.querySelector('body').style.backdropFilter = backdrop_filter;
    });

    /* Internal tracking for biolink page blocks */
    document.querySelectorAll('a[data-track-biolink-block-id]').forEach(element => {
        element.addEventListener('click', event => {
            let biolink_block_id = event.currentTarget.getAttribute('data-track-biolink-block-id');
            navigator.sendBeacon(`${site_url}l/link?biolink_block_id=${biolink_block_id}&no_redirect`);
        });
    });

    /* Fix CSS when using scroll for background attachment on long content */
    if (document.body.offsetHeight > window.innerHeight) {
        let background_attachment = document.querySelector('body').style.backgroundAttachment;
        if (background_attachment == 'scroll') {
            document.documentElement.style.height = 'auto';
        }
    }
</script>


<script src="https://66biolinks.com/demo/themes/altum/assets/js/libraries/cookieconsent.js?v=5000"></script>
<link href="https://66biolinks.com/demo/themes/altum/assets/css/libraries/cookieconsent.css?v=5000" rel="stylesheet" media="screen">
<style>
    :root {
        --cc-font-family: inherit;
        --cc-bg: var(--white);
        --cc-separator-border-color: var(--white);

        --cc-modal-border-radius: var(--border-radius);
        --cc-btn-border-radius: var(--border-radius);

        --cc-primary-color: var(--gray-700);
        --cc-secondary-color: var(--gray-600);

        --cc-btn-primary-color: var(--white);
        --cc-btn-primary-bg: var(--primary);
        --cc-btn-primary-hover-bg: var(--primary-600);
        --cc-btn-primary-color-bg: var(--white);
        --cc-btn-primary-hover-color: var(--white);

        --cc-btn-secondary-bg: var(--gray-300);
        --cc-btn-secondary-hover-bg: var(--gray-400);

        --cc-btn-secondary-hover-color: var(--black);
        --cc-btn-secondary-hover-border-color: var(--cc-btn-secondary-hover-bg);
    }

    .cc--darkmode {
        --cc-bg: var(--white);
    }
</style>

<script>
    window.addEventListener('load', () => {
        let language_code = document.documentElement.getAttribute('lang');
        let language_direction = document.documentElement.getAttribute('dir');
        let translations = {};

        translations[language_code] = {
            consentModal: {
                title: "We use cookies \ud83c\udf6a",
                description: "Hi, this website uses essential cookies to ensure its proper operation and tracking cookies to understand how you interact with it. The latter will be set only after consent.",
                acceptAllBtn: "Accept all",
                acceptNecessaryBtn: "Reject all",
                showPreferencesBtn: "Customize",
            },

            preferencesModal: {
                title: "Cookie preferences",
                acceptAllBtn: "Accept all",
                acceptNecessaryBtn: "Reject all",
                savePreferencesBtn: "Save settings",
                closeIconLabel: "Close",
                sections: [{
                        title: "Cookie usage \ud83d\udce2",
                        description: "We use cookies to ensure the basic functionalities of the website and to enhance your online experience. You can choose for each category to opt-in\/out whenever you want. For more details relative to cookies and other sensitive data, please read the full <a href=\"\" class=\"cc-link\">privacy policy<\/a>."
                    },

                    {
                        title: "Strictly necessary cookies",
                        description: "These cookies are essential for the proper functioning of my website. Without these cookies, the website would not work properly.",
                        linkedCategory: 'necessary'
                    },

                    {
                        title: "Performance and Analytics cookies",
                        description: "These cookies allow the website to remember the choices you have made in the past.",
                        linkedCategory: 'analytics'
                    },

                    {
                        title: "Advertisement and Targeting cookies",
                        description: "These cookies collect information about how you use the website, which pages you visited and which links you clicked on. All of the data is anonymized and cannot be used to identify you.",
                        linkedCategory: 'targeting'
                    },
                ]
            }
        };

        CookieConsent.run({
            categories: {
                necessary: {
                    enabled: true,
                    readOnly: true,
                },
                analytics: {},
                targeting: {},
            },

            language: {
                rtl: language_direction == 'rtl' ? language_code : null,
                default: language_code,
                autoDetect: 'document',
                translations
            },


            guiOptions: {
                consentModal: {
                    layout: "cloud",
                    position: "bottom right",
                    flipButtons: false
                },
                preferencesModal: {
                    layout: 'box',
                }
            },
        });
    });
</script>

<?php
$snippet_footer = $result_link_settings['snippet_footer'] ?? '';
$snippet_footer = html_entity_decode($snippet_footer, ENT_QUOTES, 'UTF-8');
echo $snippet_footer;
?>

</html>
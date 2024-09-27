<?php

$ob_main = $setting['main'];
$main = json_decode($ob_main, true);

$ob_theme = $setting['theme'];
$theme = json_decode($ob_theme, true);

$ob_twitter_og = $setting['twitter_og'];
$twitter_og = json_decode($ob_twitter_og, true);

$area = explode('/', $viewName)[0];

switch ($area) 
{
    case 'admin':
        require_once __DIR__ . '/partials/header.php';
        require_once __DIR__ . '/partials/secondary-menu.php';
        $this->loadViewInTemplate($viewName, $viewData);
        require_once __DIR__ . '/partials/footer.php';
        break;

    default:
        require_once __DIR__ . '/partials/header.php';
        $this->loadViewInTemplate($viewName, $viewData);
        require_once __DIR__ . '/partials/footer.php';
        break;
}

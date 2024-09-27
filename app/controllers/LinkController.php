<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 *
 * @see http://baggitech.com.br
 */
class LinkController extends Controller
{
    public function index()
    {
        $route = 'admin/link/index';
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;
		$data = (new DataService())->getDataServiceBackEnd($data, $user_id);
        // ---------------------------------------------------------------------- //

        $class_link = new Link();
        $data['links'] = $class_link->getLinksAndDomainsByUserId($user_id);
        $data['totalEnabled'] = $class_link->getAllLinksIsEnabledByUserID($user_id);
        $data['totalDisabled'] = $class_link->getAllLinksIsDisabledByUserID($user_id);

        require_once __DIR__.'/forms/link-get.php';
        require_once __DIR__.'/forms/link-create.php';
        require_once __DIR__.'/forms/link-enabledDisabled.php';
        require_once __DIR__.'/forms/link-delete.php';

        $this->loadTemplate($route, $data);
    }

    public function edit()
    {
        $route = 'admin/link/edit';
		$data = array();
		$user_id = $_SESSION['user_id'] ?? null;
		$data = (new DataService())->getDataServiceBackEnd($data, $user_id);
        // ---------------------------------------------------------------------- //

        $link_id = $_SESSION['link_id'] ?? null;

        $class_link = new Link();
        $data['link'] = $class_link->getAllTablesByLinkId($link_id);

        $class_theme = new Themes();
        $data['theme'] = $class_theme->getAllThemes();
        $data['theme_category'] = $class_theme->getAllThemesCategory();

        $class_link_seo = new LinkSeo();
        $data['link_seo'] = $class_link_seo->getLinkSeo($link_id);

        $class_link_font = new LinkFonts();
        $data['link_font'] = $class_link_font->getLinkFonts($link_id);

        $class_link_background = new LinkBackground();
        $data['link_background'] = $class_link_background->getLinkBackground($link_id);

        $class_blocks = new Blocks();
        $data['blocks'] = $class_blocks->getBlocks($link_id);

        $class_block_avatar = new BlockAvatar();
        $data['block_avatar'] = $class_block_avatar->getBlockAvatar($link_id);

        // Settings
        require_once __DIR__.'/forms/link-name-update.php';
        require_once __DIR__.'/forms/link-seo-update.php';
        require_once __DIR__.'/forms/link-font-update.php';
        require_once __DIR__.'/forms/link-background-update.php';
        require_once __DIR__.'/forms/link-enabledDisabledTwo.php';
        
        // Blocks
        require_once __DIR__.'/forms/block-avatar-create.php';
        require_once __DIR__.'/forms/block-avatar-update.php';
        require_once __DIR__.'/forms/block-avatar-delete.php';
        require_once __DIR__.'/forms/block-avatar-enabledDisabled.php';
        
        $this->loadTemplate($route, $data);
    }
}

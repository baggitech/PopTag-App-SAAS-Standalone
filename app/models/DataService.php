<?php

/**
 * A lightweight PHP MVC Framework.
 *
 * @author Lázaro Baggi
 * @copyright Lázaro Baggi - BTECH. All rights reserved.
 * @link http://baggitech.com.br
 */

class DataService
{
    public function getDataServiceFrontEnd($data)
    {
        $class_settings = new Settings();
        $data['setting'] = $class_settings->getSettings();

        $class_language = new Languages();
        $data['language'] = $class_language->getLanguage();

        return $data;
    }

    public function getDataServiceBackEnd($data, $user_id)
    {
        $class_settings = new Settings();
        $data['setting'] = $class_settings->getSettings();

        $class_language = new Languages();
        $data['language'] = $class_language->getLanguage();

        $class_auth = new Authentication();
        $class_auth->requireLoggedInAndVerified();

        $class_user = new User();
        $data['user'] = $class_user->getUser($user_id);

        return $data;
    }

    public function getDataServiceBackEndAndNotVerified($data, $user_id)
    {
        $class_settings = new Settings();
        $data['setting'] = $class_settings->getSettings();

        $class_language = new Languages();
        $data['language'] = $class_language->getLanguage();

        $class_auth = new Authentication();
        $class_auth->requireLoggedIn();

        $class_user = new User();
        $data['user'] = $class_user->getUser($user_id);

        return $data;
    }

}

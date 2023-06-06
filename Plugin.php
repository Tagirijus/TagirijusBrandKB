<?php

namespace Kanboard\Plugin\TagirijusBrandKB;

use Kanboard\Core\Plugin\Base;
// use Kanboard\Core\Translator;
// use Kanboard\Plugin\TagirijusBrandKB\AgeHelper;  // Helper Class and Filename should be exact
// use Kanboard\Helper;  // Add core Helper for using forms etc. inside external templates

class Plugin extends Base
{
    public function initialize()
    {
        // Template Override
        $this->template->setTemplateOverride('layout', 'TagirijusBrandKB:layout/layout');
        $this->template->setTemplateOverride('header/title', 'TagirijusBrandKB:header/title');

        // Hook
        $this->template->hook->attach('template:auth:login-form:before', 'TagirijusBrandKB:layout/login_logo');
    }

    // public function onStartup()
    // {
    //     Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    // }

    public function getPluginName()
    {
        return 'TagirijusBrandKB';
    }

    public function getPluginDescription()
    {
        return t('This plugin adds my logo (Tagirijus) into Kanboard.');
    }

    public function getPluginAuthor()
    {
        return 'Tagirijus';
    }

    public function getPluginVersion()
    {
        return '1.0.2';
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.2.29';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Tagirijus/TagirijusBrandKB';
    }
}

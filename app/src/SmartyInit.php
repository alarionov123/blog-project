<?php

namespace App;

use Smarty;

class SmartyInit extends Smarty
{
    public function __construct()
    {
        parent::__construct();

        $this->setTemplateDir('templates/');
        $this->setCompileDir('templates/templates_c/');
        $this->setConfigDir('config/');
        $this->setCacheDir('var/cache');

      //  $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
    }
}
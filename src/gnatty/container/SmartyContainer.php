<?php

namespace gnatty\container;

class SmartyContainer {
    
    public $name = 'smarty';

    public function build() {
        $config = [
            'template' => './../view/',
            'cache' => './../cache/'
        ];
        $smarty = new \Smarty();
        $smarty->setTemplateDir($config['template'].'template/');
        $smarty->setCompileDir($config['cache'].'templates_c/');
        $smarty->setConfigDir($config['cache'].'configs/');
        $smarty->setCacheDir($config['cache'].'cache/');
        return $smarty;
    }

}

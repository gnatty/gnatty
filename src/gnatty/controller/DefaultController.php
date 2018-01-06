<?php

namespace gnatty\controller;

class DefaultController extends \gnatty\mia\ControllerMIA
{
    
    public function home($request, $response, $args) {
        $this->smarty->assign('name', $args['name']);
        return $this->smarty->display('e.tpl');
    }

}
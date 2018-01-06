<?php

namespace gnatty\mia;

class ControllerMIA
{

  public $container;
  public $smarty;

  public function __construct(\Slim\Container $container) {
      $this->container = $container;
      $this->smarty = $this->container->get('smarty');
  }

  public function pre($args) {
    echo '<pre>';
    print_r($args);
    echo '</pre>';
  }

}
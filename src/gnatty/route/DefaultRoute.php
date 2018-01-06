<?php

namespace gnatty\route;

class DefaultRoute
{

  public function build($app) {
    $app->get('/hello/{name}', '\gnatty\controller\DefaultController:home');
  }

}

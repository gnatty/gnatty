<?php

namespace gnatty\mia;

class SlimMIA 
{

  private $app;
  private $container = [];
  private $route = [];

  public function __construct($config) {
    $slimSettings = [];
    if( !empty($config['slim']['settings']) ) {
      $slimSettings = $config['slim']['settings'];
    } 
    if( !empty($config['slim']['container']) ) {
      $this->container = $config['slim']['container'];
    } 
    if( !empty($config['slim']['route']) ) {
      $this->route = $config['slim']['route'];
    } 

    $c = new \Slim\Container($slimSettings);
    $this->app = new \Slim\App($c);
  }

  public function init() {
    $this->loadContainer();
    $this->loadRoute();
  }

  public function run() {
    $this->init();
    $this->app->run();
  }

  public function loadContainer() {
    foreach($this->container as $className) {
      $class = '\gnatty\container\\'.$className;
      $class = new $class();
      $this->app->getContainer()[$class->name] = function($c) use($class) {
        return $class->build();
      };
    }
  }

  public function loadRoute() {
    foreach($this->route as $className) {
      $class = '\gnatty\route\\'.$className;
      $class = new $class();
      $class->build($this->app);
    }
  }

}
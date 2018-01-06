<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . './../vendor/autoload.php';
require __DIR__ . './../vendor/smarty/smarty/libs/Smarty.class.php';

$configuration = [
  // --- SLIM CONFIGURATION
  'slim' => [
    // --- SLIM SETTINGS
    'settings' => [
      'addContentLengthHeader' => false,
      'displayErrorDetails' => true
    ],
    // --- SLIM CONTAINER
    'container' => [
      'SmartyContainer'
    ],
    // --- SLIM ROUTE
    'route' => [
      'DefaultRoute'
    ]
  ]
];

$slimApp = new \gnatty\mia\SlimMIA($configuration);
$slimApp->run();
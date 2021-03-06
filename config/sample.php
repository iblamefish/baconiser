<?php

$config = array(
  'logging' => array(
    'rollbar' => array(
      'access_token' => '',
      'environment' => 'example_env',
      'set_exception_handler' => true,
      'set_error_handler' => true,
      'report_fatal_errors' => true
    )
  ),
  'templates' => array(
    'twig' => array(
      'cache' => '/path/to/cache/',
      'path' => '/path/to/templates/'
    )
  )
);


return $config;

<?php
if ('development' == $_SERVER['APPLICATION_ENV']) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

require 'vendor/autoload.php';

Zend\Mvc\Application::init(require 'config/application.config.php')->run();

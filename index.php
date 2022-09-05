<?php

// FRONT CONTROLLER

session_start();

// Connecting system files
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');
require_once(ROOT.'/components/Interfaces.php');

// Call Router
$router = new Router();
$router->run();
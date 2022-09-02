<?php

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');
require_once(ROOT.'/components/Interfaces.php');

$router = new Router();
$router->run();
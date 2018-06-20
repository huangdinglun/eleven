<?php

define('APP_HOST', $_SERVER['HTTP_HOST']);

$controller = isset($_GET['c']) ? ucfirst($_GET['c']):'Index';
$action = isset($_GET['a']) ? $_GET['a'] : 'Index';

$config = include('./Common/config.php');

include('./Common/function.php');

use Common\Controller;

$controller = 'Controllers\Home\\'.$controller;

$ob = new $controller();

$ob->$action();
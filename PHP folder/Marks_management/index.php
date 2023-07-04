<?php
//require 'connecion.php';
//
//$checkConnection = new dbConnection();
require 'router.php';

$routerConnection = new Router();

$routerConnection->get('/','frontPage');
$routerConnection->post('/create','insert');
$routerConnection->checkRouterConnection($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);
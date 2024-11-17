<?php

// definir constantes para controlar o fluxo da aplicação
define('CONTROL', true);

$routes = require_once('inc/routes.php');
require_once('inc/api_consumer.php');

// definir rota
//guarda o valor da rota, as rotas permitidas
$route = $_GET['route'] ?? 'home';

// se a rota não existe dentro das rotas dentro do inc/routes
if(!in_array($route, $routes)){
    $route = '404';
}

switch($route){
    case 'home':
        require_once 'inc/header.php';
        require_once 'scripts/home.php';
        require_once 'inc/footer.php';
        break;
    case 'country':
        require_once 'inc/header.php';
        require_once 'scripts/country.php';
        require_once 'inc/footer.php';
        break;
    case '404':
        require_once 'inc/header.php';
        require_once 'scripts/404.php';
        require_once 'inc/footer.php';
        break;
}
<?php

use Aura\Router\RouterContainer;
use Laminas\Diactoros\ServerRequestFactory;

require '../vendor/autoload.php';

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();

$map->get('first.see', '/router/first', function() {
    return 'First see';
});

$matcher = $routerContainer->getMatcher();

$request = ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$route = $matcher->match($request);
if (! $route) {
    echo 'Route not found';
    exit;
}

$response = $route->handler;
echo $response();
<?php

use Acer\BasePhp2\Controllers\Client\AuthController;
use Acer\BasePhp2\Controllers\Client\HomeController;
use Acer\BasePhp2\Controllers\Client\ProductController;

$router->get('/',                      HomeController::class . '@index');
$router->get('/',                      ProductController::class . '@index');
$router->get('/{id}/detail',           ProductController::class . '@showclient');
$router->get('/auth/login',            AuthController::class . '@showFormLogin');
$router->post('/auth/handle-login',    AuthController::class . '@login');
$router->get('/auth/logout',           AuthController::class . '@logout');

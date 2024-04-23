<?php
include_once 'core/bootstrap.php';

$router = new Router();

$router->get('/', 'PageController@home');
$router->get('/login', 'PageController@login');
$router->get('/register', 'PageController@register');
// $router->get('/dashboard', 'PageController@dashboard');

$router->post('/login', 'AuthController@login');
$router->post('/register', 'AuthController@register');
$router->get('/logout', 'AuthController@logout');

$router->get('/dashboard/{uri}', 'PageController@dashboard');

$router->dispatch();

include_once 'app/views/partials/foot.php';

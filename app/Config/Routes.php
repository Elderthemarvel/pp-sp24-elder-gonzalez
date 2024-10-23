<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/framework', 'Home::framework');
$routes->get('/aplicaciones', 'Home::aplicaciones');
$routes->get('/creditos', 'Home::creditos');
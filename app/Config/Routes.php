<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Empleados', 'Empleados::index');
$routes->get('/empleados/crear', 'Empleados::create');

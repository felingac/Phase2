<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Empleados::index');
$routes->get('/Empleados', 'Empleados::index');
$routes->get('/Empleados/create', 'Empleados::create');
$routes->get('/Empleados/edit/(:any)', 'Empleados::edit/$1');
$routes->post('/Empleados/save', 'Empleados::save');

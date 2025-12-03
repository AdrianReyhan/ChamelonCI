<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'Home::register');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/rmstock', 'Home::rmstock');
$routes->get('/defecttarget', 'Home::defecttarget');

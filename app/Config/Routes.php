<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Halaman::index');

$routes->get('buku', 'Buku::index');
$routes->get('buku/(:segment)', 'Buku::detail/$1');

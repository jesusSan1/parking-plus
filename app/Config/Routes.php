<?php

use App\Controllers\Dashboard;
use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->post('/', [Home::class, 'index']);

$routes->get('dashboard', [Dashboard::class, 'index'], ['filter' => 'auth']);
$routes->get('salir', [Dashboard::class, 'salir']);
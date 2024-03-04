<?php

use App\Controllers\Dashboard;
use App\Controllers\Home;
use App\Controllers\Recuperar;
use App\Controllers\Reestablecer;
use App\Controllers\Usuarios;
use App\Controllers\Verificar;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->post('/', [Home::class, 'index']);

$routes->get('recuperar', [Recuperar::class, 'index']);
$routes->post('recuperar', [Recuperar::class, 'index']);

$routes->group('', ['filter' => 'token'], static function ($routes) {
    $routes->get('verificar', [Verificar::class, 'index']);
    $routes->post('verificar', [Verificar::class, 'index']);

    $routes->get('reestablecer', [Reestablecer::class, 'index']);
    $routes->post('reestablecer', [Reestablecer::class, 'index']);
});

$routes->get('dashboard', [Dashboard::class, 'index'], ['filter' => 'auth']);
$routes->get('salir', [Dashboard::class, 'salir']);
$routes->get('crear-usuarios', [Usuarios::class, 'index'], ['flter' => 'auth']);
$routes->post('crear-usuarios', [Usuarios::class, 'index'], ['flter' => 'auth']);
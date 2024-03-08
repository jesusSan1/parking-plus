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

$routes->group('', ['filter' => 'auth'], static function ($routes) {
    $routes->get('dashboard', [Dashboard::class, 'index']);
    $routes->get('salir', [Dashboard::class, 'salir']);

    $routes->group('', ['filter' => 'admin'], static function ($routes) {
        $routes->get('crear-usuarios', [Usuarios::class, 'index']);
        $routes->post('crear-usuarios', [Usuarios::class, 'index']);
        $routes->post('habilitar', [Usuarios::class, 'habilitar']);
    });

});
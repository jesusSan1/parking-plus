<?php

use App\Controllers\Configuracion;
use App\Controllers\Dashboard;
use App\Controllers\Home;
use App\Controllers\Perfil;
use App\Controllers\Recuperar;
use App\Controllers\Reestablecer;
use App\Controllers\TipoVehiculos;
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

$routes->group('', ['filter' => 'token'], static function($routes) {
    $routes->get('verificar', [Verificar::class, 'index']);
    $routes->post('verificar', [Verificar::class, 'index']);

    $routes->get('reestablecer', [Reestablecer::class, 'index']);
    $routes->post('reestablecer', [Reestablecer::class, 'index']);
});

$routes->group('', ['filter' => 'auth'], static function($routes) {
    $routes->get('dashboard', [Dashboard::class, 'index']);
    $routes->get('salir', [Dashboard::class, 'salir']);

    $routes->get('perfil', [Perfil::class, 'index'], ['filter' => 'gerente']);
    $routes->post('perfil', [Perfil::class, 'index'], ['filter' => 'gerente']);
    $routes->get('configuracion', [Configuracion::class, 'index'], ['filter' => 'gerente']);
    $routes->post('configuracion', [Configuracion::class, 'index'], ['filter' => 'gerente']);
    $routes->get('tipo-vehiculos', [TipoVehiculos::class, 'index'], ['filter' => 'gerente']);
    $routes->post('tipo-vehiculos', [TipoVehiculos::class, 'index'], ['filter' => 'gerente']);
    $routes->get('eliminar-tipo-vehiculo/(:num)', [TipoVehiculos::class, 'eliminar/$1'], ['filter' => 'gerente']);

    $routes->group('', ['filter' => 'admin'], static function($routes) {
        $routes->get('crear-usuarios', [Usuarios::class, 'index']);
        $routes->post('crear-usuarios', [Usuarios::class, 'index']);
        $routes->post('habilitar', [Usuarios::class, 'habilitar']);
    });

});
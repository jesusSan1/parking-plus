<?php

use App\Controllers\AjusteEmpresaController;
use App\Controllers\ConfiguracionController;
use App\Controllers\Dashboard;
use App\Controllers\Home;
use App\Controllers\PerfilController;
use App\Controllers\Recuperar;
use App\Controllers\Reestablecer;
use App\Controllers\Verificar;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->post('/', [Home::class, 'index']);

$routes->get('recuperar', [Recuperar::class, 'index']);
$routes->post('recuperar', [Recuperar::class, 'index']);

$routes->get('verificar', [Verificar::class, 'index'], ['filter' => 'token']);
$routes->post('verificar', [Verificar::class, 'index'], ['filter' => 'token']);

$routes->get('reestablecer', [Reestablecer::class, 'index'], ['filter' => 'token']);
$routes->post('reestablecer', [Reestablecer::class, 'index'], ['filter' => 'token']);

$routes->get('salir', [Dashboard::class, 'salir']);

$routes->group('', ['filter' => 'auth'], static function ($routes) {
    $routes->get('dashboard', [Dashboard::class, 'index']);

    $routes->get('ajuste-empresa', [AjusteEmpresaController::class, 'index']);
    $routes->put('update-ajuste-empresa/(:num)', [AjusteEmpresaController::class, 'update/$1']);

    $routes->get('configuracion', [ConfiguracionController::class, 'index']);
    $routes->put('update-configuracion/(:num)', [ConfiguracionController::class, 'update/$1']);

    $routes->get('perfil', [PerfilController::class, 'index']);
    $routes->put('update-profile/(:num)', [PerfilController::class, 'update/$1']);

});
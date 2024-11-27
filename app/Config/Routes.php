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

$routes->get('dashboard', [Dashboard::class, 'index'], ['filter' => 'auth']);
$routes->get('salir', [Dashboard::class, 'salir']);

$routes->get('ajuste-empresa', [AjusteEmpresaController::class, 'index'], ['filter' => 'auth']);
$routes->put('update-ajuste-empresa/(:num)', [AjusteEmpresaController::class, 'update/$1'], ['filter' => 'auth']);

$routes->get('configuracion', [ConfiguracionController::class, 'index'], ['filter' => 'auth']);
$routes->put('update-configuracion/(:num)', [ConfiguracionController::class, 'update/$1'], ['filter' => 'auth']);

$routes->get('perfil', [PerfilController::class, 'index'], ['filter' => 'auth']);
$routes->put('update-profile/(:num)', [PerfilController::class, 'update/$1'], ['filter' => 'auth']);

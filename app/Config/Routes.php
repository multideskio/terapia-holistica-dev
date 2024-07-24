<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Login::index');
$routes->post('/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');


//URL ABERTA PARA CRIAR A CONTA ATRAVÉS DO GATEWAY DE PAGAMENTO
// TIPO POST
// PASSA O ID DO PRODUTO NO ULTIMO PARAMETRO
$routes->post('init/webhook/(:any)', '\App\Controllers\Apis\V1\Webhook::createUser/$1');


$routes->addRedirect('dashboard', 'dashboard/ts/home');

$routes->group('dashboard/ts', ['filter' => ['ts', 'auth']], static function ($routes) {
    
    $routes->addRedirect('/', 'dashboard/ts/home');

    $routes->get('home', 'Ts::timeLine');
    $routes->get('anamnese', 'Home::index');
    $routes->get('analytics', 'Home::index');
    $routes->get('finance', 'Home::index');
    $routes->get('contacts', 'Home::index');
    $routes->get('file-manager', 'Home::index');
    $routes->get('tasks', 'Home::index');
    $routes->get('history', 'Home::index');
});

$routes->group('dashboard/tp', ['filter' => ['tp', 'auth']], static function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('home', 'Home::index');
    $routes->get('anamnese', 'Home::index');
    $routes->get('analytics', 'Home::index');
    $routes->get('finance', 'Home::index');
    $routes->get('contacts', 'Home::index');
    $routes->get('file-manager', 'Home::index');
    $routes->get('tasks', 'Home::index');
    $routes->get('history', 'Home::index');
});



$routes->group('api/v1', ['namespace' => '\App\Controllers\Apis\V1'], static function ($routes) {
    $routes->group('webhook', ['filter' => ''], static function ($routes){
        $routes->get('', 'Webhook::index', ['filter' => 'cors']);
        $routes->post('', 'Webhook::index', ['filter' => 'cors']);
    });

    $routes->group('storie', ['filter' => 'auth'], static function ($routes){
        $routes->get('ts', 'Story::tsGet');
    });
    //$routes->resource('webhook', ['filter' => 'cors']);
});
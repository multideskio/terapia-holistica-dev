<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Login::index');

$routes->group('dashboard', static function ($routes) {
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



$routes->group('api/v1', static function ($routes) {
    
});

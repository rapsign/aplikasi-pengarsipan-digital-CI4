<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Backend::index');
$routes->get('auth/index', 'Auth::index');
$routes->post('auth/login', 'Auth::login');
$routes->get('auth/logout', 'Auth::logout');
$routes->post('admin/save', 'Admin::save');
$routes->get('admin/delete/(:num)', 'Admin::delete/$1');
$routes->get('backend/download/(:num)', 'Backend::download/$1');
$routes->get('/backend', 'Backend::kp');
$routes->get('/backend/view/(:num)', 'Backend::view/$1');

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProjectController::index');
$routes->get('/projects', 'ProjectController::index');
$routes->get('/projects/new', 'ProjectController::new');
$routes->post('/projects', 'ProjectController::create');
$routes->get('/projects/(:num)', 'ProjectController::show/$1');

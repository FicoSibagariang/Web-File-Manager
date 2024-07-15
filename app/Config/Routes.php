<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/pages/manage', 'Pages::manage');
$routes->get('/pages/project', 'Pages::project');
$routes->get('/pages/files', 'Pages::files');
$routes->get('/pages/activity', 'Pages::activity');
$routes->get('/pages/login', 'Login::index');
$routes->get('/pages/settings', 'Pages::settings');
$routes->setAutoRoute(true);

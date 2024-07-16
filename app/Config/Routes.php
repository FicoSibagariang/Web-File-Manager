<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  auth
$routes->get('/', 'Login::index');
$routes->get('/login', 'Login::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/manage', 'FileManager::index');
$routes->get('/project', 'Project::index');
$routes->get('/files', 'Files::index');
$routes->get('/settings', 'Settings::index');
$routes->post('/LoginAkun', 'Login::loginAkun');
$routes->get('/LogoutAkun', 'Login::logout');

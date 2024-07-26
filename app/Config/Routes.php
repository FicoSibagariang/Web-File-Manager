<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Login::index');
$routes->get('/login', 'Login::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/manage', 'FileManager::index');
$routes->get('/project', 'Project::index');
$routes->get('/project/create', 'Project::create');
$routes->get('/files', 'Files::index');
$routes->get('/manajemen_user', 'User::index');
$routes->post('/LoginAkun', 'Login::loginAkun');
$routes->get('/LogoutAkun', 'Login::logout');

// MANAJEMEN USER
$routes->get('/user', 'User::index');
$routes->post('/user_ajax_list', 'User::ajax_list');
$routes->get('/user/edituser/(:any)', 'User::edituser/$1');
$routes->post('/user/save', 'User::save');
$routes->post('/user/delete', 'User::delete');

// PROJECT
$routes->get('/project', 'Project::index');
$routes->post('/project_ajax_list', 'Project::ajax_list');
$routes->get('/project/editproject/(:any)', 'Project::editproject/$1');
$routes->post('/project/save', 'Project::save');
$routes->post('/project/delete', 'Project::delete');

// MANAGE FILE
$routes->get('/manage', 'FileManager::index');
$routes->get('/recent', 'FileManager::recent');
$routes->get('/manage/type', 'FileManager::type');
$routes->get('/manage/folder', 'FileManager::folder');
$routes->post('/file_ajax_list', 'FileManager::ajax_list');
$routes->post('/recent_ajax_list_recent_file', 'FileManager::ajax_list_recent_file');
$routes->get('/manage/edit/(:any)', 'FileManager::edit/$1');
$routes->post('/manage/save', 'FileManager::save');
$routes->post('/manage/delete', 'FileManager::delete');
$routes->post('/manage/get_data_file', 'FileManager::get_data_file');
$routes->post('/manage/get_data_folder', 'FileManager::get_data_folder');



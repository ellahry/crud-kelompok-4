<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('users', 'users::index');
$routes->get('users/tambah', 'Users::tambah');
$routes->post('users/simpan', 'Users::simpan');
$routes->get('users/ubah/(:num)', 'Users::ubah/$1');
$routes->post('users/update', 'Users::update');
$routes->get('users/delete/(:num)', 'Users::delete/$1');

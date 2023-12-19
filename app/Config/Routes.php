<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'riwayat::index');
$routes->get('/riwayat/create', 'riwayat::create');
$routes->post('/riwayat/save', 'riwayat::save'); // Tambahkan rute POST untuk aksi 'save'
$routes->get('/riwayat/(:segment)', 'riwayat::detail/$1');
$routes->delete('/riwayat/(:num)', 'riwayat::delete/$1');
$routes->post('/riwayat/update/(:num)', 'riwayat::update/$1');
$routes->get('/riwayat/edit/(:segment)', 'riwayat::edit/$1');

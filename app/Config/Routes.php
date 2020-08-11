<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
// $routes->setDefaultNamespace('App\Controllers');
// $routes->setDefaultController('Dashboard');
// $routes->setDefaultMethod('index');
// $routes->setTranslateURIDashes(true);
// $routes->set404Override();
// $routes->setAutoRoute(true);

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('login');
$routes->setTranslateURIDashes(true);
$routes->set404Override();
$routes->setAutoRoute(true);
// /**
//  * --------------------------------------------------------------------
//  * Route Definitions
//  * --------------------------------------------------------------------
//  */

// // We get a performance increase by specifying the default
// // route since we don't have to scan directories.
// $routes->get('/', 'Dashboard::index');


$routes->get('/', 'Auth::login');

$routes->get('auth/login', 'Auth::login');
$routes->post('auth/proses_login', 'Auth::proses_login');

$routes->get('auth/logout', 'Auth::logout');

$routes->get('dashboard', 'Dashboard::index');

$routes->get('user', 'User::index');
$routes->get('user/create', 'User::create');
$routes->post('user/user', 'User::user');
$routes->get('user/edit/(:num)', 'User::edit/$1');
$routes->post('user/update/(:num)', 'User::update/$1');
$routes->get('user/delete/(:num)', 'User::delete/$1');

$routes->get('bagian', 'Bagian::index');
$routes->get('bagian/create', 'Bagian::create');
$routes->post('bagian/bagian', 'Bagian::bagian');
$routes->get('bagian/edit/(:num)', 'Bagian::edit/$1');
$routes->post('bagian/update/(:num)', 'Bagian::update/$1');
$routes->get('bagian/delete/(:num)', 'Bagian::delete/$1');

$routes->get('suratMasuk', 'SuratMasuk::index');
// $routes->get('suratMasuk/create', 'SuratKeluar::create');
// $routes->post('suratKeluar/bagian', 'SuratKeluar::bagian');
// $routes->get('suratKeluar/edit/(:num)', 'SuratKeluar::edit/$1');
// $routes->post('suratKeluar/update/(:num)', 'SuratKeluar::update/$1');
// $routes->get('suratKeluar/delete/(:num)', 'SuratKeluar::delete/$1');

$routes->get('suratKeluar', 'SuratKeluar::index');
$routes->get('suratKeluar/create', 'SuratKeluar::create');
$routes->post('suratKeluar/bagian', 'SuratKeluar::bagian');
$routes->get('suratKeluar/edit/(:num)', 'SuratKeluar::edit/$1');
$routes->post('suratKeluar/update/(:num)', 'SuratKeluar::update/$1');
$routes->get('suratKeluar/delete/(:num)', 'SuratKeluar::delete/$1');



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

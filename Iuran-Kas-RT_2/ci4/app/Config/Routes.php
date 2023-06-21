<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Data_Warga::index');
$routes->get('/data_warga', 'Data_Warga::index');
$routes->get('/laporan', 'Laporan::index');
$routes->group('admin', ['filter' => 'auth'],function($routes) {
	$routes->get('data_warga', 'Data_Warga::admin_index');
	$routes->get('iuran', 'iuran::admin_index');
	$routes->get('laporan', 'laporan::admin_index');
	$routes->add('data_warga/add', 'Data_Warga::add');
	$routes->add('iuran/add', 'iuran::add');
	$routes->add('data_warga/edit/(:any)', 'Data_Warga::edit/$1');
	$routes->add('iuran/edit/(:any)', 'iuran::edit/$1');
	$routes->get('data_warga/delete/(:any)', 'Data_Warga::delete/$1');
	$routes->get('iuran/delete/(:any)', 'iuran::delete/$1');
	$routes->add('logout', 'User::logout');
});

/*
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

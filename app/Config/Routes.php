<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/pemasukan', 'PemasukanController::index');
$routes->get('/pemasukan', 'PemasukanController::index');
$routes->get('/create_pemasukan', 'PemasukanController::create');
$routes->post('/store_pemasukan', 'PemasukanController::store');
$routes->get('/edit_pemasukan/(:num)', 'PemasukanController::edit/$1');
$routes->post('/update_pemasukan/(:num)', 'PemasukanController::update/$1');
$routes->delete('/delete_pemasukan/(:num)', 'PemasukanController::delete/$1');
$routes->get('/pengeluaran', 'PengeluaranController::index');
$routes->get('/create_pengeluaran', 'PengeluaranController::create');
$routes->post('/store_pengeluaran', 'PengeluaranController::store');
$routes->get('/edit_pengeluaran/(:num)', 'PengeluaranController::edit/$1');
$routes->post('/update_pengeluaran/(:num)', 'PengeluaranController::update/$1');
$routes->delete('/delete_pengeluaran/(:num)', 'PengeluaranController::delete/$1');
$routes->get('/nota', 'NotaController::index');
$routes->get('/create_nota', 'NotaController::create');
$routes->post('/store_nota', 'NotaController::store');
$routes->get('/edit_nota/(:num)', 'NotaController::edit/$1');
$routes->post('/update_nota/(:num)', 'NotaController::update/$1');
$routes->delete('/delete_nota/(:num)', 'NotaController::delete/$1');

// $routes->get('/index', 'Pages::index');
// $routes->get('(:any)', 'Pages::view/$1');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

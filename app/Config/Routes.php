<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/* kependudukan */
$routes->get('/data-warga', 'kependudukan::dataWarga');
$routes->get('/data-warga/(:any)', 'kependudukan::dataWarga/$1');
$routes->get('/delete-warga/(:any)', 'kependudukan::hapusWarga/$1');
$routes->post('/simpan-warga', 'kependudukan::simpanWarga');
$routes->post('/detail-warga', 'kependudukan::ajaxDetailWarga');

$routes->get('/kartu-keluarga', 'kependudukan::dataKK');
$routes->get('/kartu-keluarga/(:any)', 'kependudukan::dataKK/$1');

/* Mutasi penduduk */
$routes->get('/data-domisili', 'mutasi::dataDomisili');
$routes->get('/data-domisili/(:any)', 'mutasi::dataDomisili/$1');




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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

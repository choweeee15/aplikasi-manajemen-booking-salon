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




$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/gudang/generateCaptcha', 'Gudang::generateCaptcha');

$routes->get('/app-settings', 'AppSettingsController::index');
$routes->post('/app-settings/save', 'AppSettingsController::save');

$routes->get('payment/generatePdf', 'PaymentController::generatePdf');


$routes->post('appeal/submit', 'AppealController::submit');
$routes->get('appealAdmin/accept/(:num)', 'AppealAdminController::accept/$1');
$routes->get('appealAdmin/reject/(:num)', 'AppealAdminController::reject/$1');
$routes->get('appealAdmin/view', 'AppealAdminController::viewAppeals');



$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
$routes->post('/bookParking', 'ParkingController::bookParking');
$routes->get('ParkingController/updateStatusReservasi/(:num)', 'ParkingController::updateStatusReservasi/$1');
$routes->post('ParkingController/uploadBuktiDenda/(:num)', 'ParkingController::uploadBuktiDenda/$1');
$routes->get('parking/checkLateReservations', 'ParkingController::checkLateReservations');
$routes->get('/log-activity', 'LogActivityController::index');


$routes->get('/lapangan', 'LapanganController::index');
$routes->get('/lapangan/create', 'LapanganController::create');
$routes->post('/lapangan/store', 'LapanganController::store');
$routes->get('/lapangan/delete/(:num)', 'LapanganController::delete/$1');
$routes->get('lapangan/edit/(:num)', 'LapanganController::edit/$1');
$routes->post('lapangan/update/(:num)', 'LapanganController::update/$1');
$routes->get('lapangan-map', 'LapanganMapController::index');
$routes->post('booking/simpan', 'BookingController::simpan');
$routes->get('booking/history', 'BookingController::history');
$routes->post('booking/update_status/(:num)', 'BookingController::update_status/$1');

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

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

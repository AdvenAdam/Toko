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
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/Auth/(:any)', 'Auth::index');

// Shop
$routes->get('/Shop/cart', 'Shop::cart');
$routes->get('/Shop/add', 'Shop::add');
$routes->get('/Shop/delete/(:any)', 'Shop::delete/$1');
$routes->get('/Shop/update/', 'Shop::update');
$routes->get('/Shop/clear/', 'Shop::clear');
$routes->get('/Shop/(:any)', 'Shop::index');
$routes->get('/Wishlist/(:segment)', 'Wishlist::wish/$1');
// TRX
// $routes->get('/Trx/Save/', 'Trx::Save');


// Cassing
$routes->get('/casing', 'casing::index', ['filter' => 'authfilter']);
$routes->get('/casing/create', 'casing::create', ['filter' => 'authfilter']);
$routes->get('/casing/tambah', 'casing::tambah', ['filter' => 'authfilter']);
$routes->get('/casing/excel', 'casing::excel', ['filter' => 'authfilter']);
$routes->get('/casing/cetak', 'casing::cetak', ['filter' => 'authfilter']);
$routes->get('/casing/edit/(:segment)', 'casing::edit/$1', ['filter' => 'authfilter']);
$routes->get('/casing/addstok/(:segment)', 'casing::addstok/$1', ['filter' => 'authfilter']);
$routes->delete('/casing/(:num)', 'casing::delete/$1', ['filter' => 'authfilter']);
$routes->get('/casing/(:any)', 'casing::detail/$1', ['filter' => 'authfilter']);
// Memori
$routes->get('/memori', 'memori::index', ['filter' => 'authfilter']);
$routes->get('/memori/create', 'memori::create', ['filter' => 'authfilter']);
$routes->get('/memori/tambah', 'memori::tambah', ['filter' => 'authfilter']);
$routes->get('/memori/excel', 'memori::excel', ['filter' => 'authfilter']);
$routes->get('/memori/cetak', 'memori::cetak', ['filter' => 'authfilter']);
$routes->get('/memori/edit/(:segment)', 'memori::edit/$1', ['filter' => 'authfilter']);
$routes->get('/memori/addstok/(:segment)', 'memori::addstok/$1', ['filter' => 'authfilter']);
$routes->delete('/memori/(:num)', 'memori::delete/$1', ['filter' => 'authfilter']);
$routes->get('/memori/(:any)', 'memori::detail/$1', ['filter' => 'authfilter']);
// motherboard
$routes->get('/motherboard', 'motherboard::index', ['filter' => 'authfilter']);
$routes->get('/motherboard/create', 'motherboard::create', ['filter' => 'authfilter']);
$routes->get('/motherboard/tambah', 'motherboard::tambah', ['filter' => 'authfilter']);
$routes->get('/motherboard/excel', 'motherboard::excel', ['filter' => 'authfilter']);
$routes->get('/motherboard/cetak', 'motherboard::cetak', ['filter' => 'authfilter']);
$routes->get('/motherboard/edit/(:segment)', 'motherboard::edit/$1', ['filter' => 'authfilter']);
$routes->get('/motherboard/addstok/(:segment)', 'motherboard::addstok/$1', ['filter' => 'authfilter']);
$routes->delete('/motherboard/(:num)', 'motherboard::delete/$1', ['filter' => 'authfilter']);
$routes->get('/motherboard/(:any)', 'motherboard::detail/$1', ['filter' => 'authfilter']);
// procesor
$routes->get('/procesor', 'procesor::index', ['filter' => 'authfilter']);
$routes->get('/procesor/create', 'procesor::create', ['filter' => 'authfilter']);
$routes->get('/procesor/tambah', 'procesor::tambah', ['filter' => 'authfilter']);
$routes->get('/procesor/excel', 'procesor::excel', ['filter' => 'authfilter']);
$routes->get('/procesor/cetak', 'procesor::cetak', ['filter' => 'authfilter']);
$routes->get('/procesor/edit/(:segment)', 'procesor::edit/$1', ['filter' => 'authfilter']);
$routes->get('/procesor/addstok/(:segment)', 'procesor::addstok/$1', ['filter' => 'authfilter']);
$routes->delete('/procesor/(:num)', 'procesor::delete/$1', ['filter' => 'authfilter']);
$routes->get('/procesor/(:any)', 'procesor::detail/$1', ['filter' => 'authfilter']);
// psu
$routes->get('/psu', 'psu::index', ['filter' => 'authfilter']);
$routes->get('/psu/create', 'psu::create', ['filter' => 'authfilter']);
$routes->get('/psu/tambah', 'psu::tambah', ['filter' => 'authfilter']);
$routes->get('/psu/excel', 'psu::excel', ['filter' => 'authfilter']);
$routes->get('/psu/cetak', 'psu::cetak', ['filter' => 'authfilter']);
$routes->get('/psu/edit/(:segment)', 'psu::edit/$1', ['filter' => 'authfilter']);
$routes->get('/psu/addstok/(:segment)', 'psu::addstok/$1', ['filter' => 'authfilter']);
$routes->delete('/psu/(:num)', 'psu::delete/$1', ['filter' => 'authfilter']);
$routes->get('/psu/(:any)', 'psu::detail/$1', ['filter' => 'authfilter']);
// vga
$routes->get('/vga', 'vga::index', ['filter' => 'authfilter']);
$routes->get('/vga/create', 'vga::create', ['filter' => 'authfilter']);
$routes->get('/vga/tambah', 'vga::tambah', ['filter' => 'authfilter']);
$routes->get('/psu/excel', 'psu::excel', ['filter' => 'authfilter']);
$routes->get('/psu/cetak', 'psu::cetak', ['filter' => 'authfilter']);
$routes->get('/vga/edit/(:segment)', 'vga::edit/$1', ['filter' => 'authfilter']);
$routes->get('/vga/addstok/(:segment)', 'vga::addstok/$1', ['filter' => 'authfilter']);
$routes->delete('/vga/(:num)', 'vga::delete/$1', ['filter' => 'authfilter']);
$routes->get('/vga/(:any)', 'vga::detail/$1', ['filter' => 'authfilter']);
// ram
$routes->get('/ram', 'ram::index', ['filter' => 'authfilter']);
$routes->get('/ram/create', 'ram::create', ['filter' => 'authfilter']);
$routes->get('/ram/tambah', 'ram::tambah', ['filter' => 'authfilter']);
$routes->get('/ram/excel', 'ram::excel', ['filter' => 'authfilter']);
$routes->get('/ram/cetak', 'ram::cetak', ['filter' => 'authfilter']);
$routes->get('/ram/edit/(:segment)', 'ram::edit/$1', ['filter' => 'authfilter']);
$routes->get('/ram/addstok/(:segment)', 'ram::addstok/$1', ['filter' => 'authfilter']);
$routes->delete('/ram/(:num)', 'ram::delete/$1', ['filter' => 'authfilter']);
$routes->get('/ram/(:any)', 'ram::detail/$1', ['filter' => 'authfilter']);
// pendingin
$routes->get('/pendingin', 'pendingin::index', ['filter' => 'authfilter']);
$routes->get('/pendingin/create', 'pendingin::create', ['filter' => 'authfilter']);
$routes->get('/pendingin/tambah', 'pendingin::tambah', ['filter' => 'authfilter']);
$routes->get('/pendingin/excel', 'pendingin::excel', ['filter' => 'authfilter']);
$routes->get('/pendingin/cetak', 'pendingin::cetak', ['filter' => 'authfilter']);
$routes->get('/pendingin/edit/(:segment)', 'pendingin::edit/$1', ['filter' => 'authfilter']);
$routes->get('/pendingin/addstok/(:segment)', 'pendingin::addstok/$1', ['filter' => 'authfilter']);
$routes->delete('/pendingin/(:num)', 'pendingin::delete/$1', ['filter' => 'authfilter']);
$routes->get('/pendingin/(:any)', 'pendingin::detail/$1', ['filter' => 'authfilter']);
// pegawai
$routes->get('/pegawai', 'pegawai::index', ['filter' => 'authfilter']);
$routes->get('/pegawai/create', 'pegawai::create', ['filter' => 'authfilter']);
$routes->get('/pegawai/cetak', 'pegawai::cetak', ['filter' => 'authfilter']);
$routes->get('/pegawai/excel', 'pegawai::excel', ['filter' => 'authfilter']);
$routes->get('/pegawai/edit/(:segment)', 'pegawai::edit/$1', ['filter' => 'authfilter']);
$routes->delete('/pegawai/(:num)', 'pegawai::delete/$1', ['filter' => 'authfilter']);
$routes->get('/pegawai/(:any)', 'pegawai::detail/$1', ['filter' => 'authfilter']);
// user
$routes->get('/user', 'user::index', ['filter' => 'authfilter']);
$routes->get('/user/create', 'user::create', ['filter' => 'authfilter']);
$routes->delete('/user/(:num)', 'user::delete/$1', ['filter' => 'authfilter']);
// Kas
$routes->get('/kas', 'kas::index', ['filter' => 'authfilter']);
$routes->get('/kas/createMasuk', 'kas::createMasuk', ['filter' => 'authfilter']);
$routes->get('/kas/createKeluar', 'kas::createKeluar', ['filter' => 'authfilter']);
$routes->get('/kas/cetak', 'kas::cetak', ['filter' => 'authfilter']);
$routes->get('/kas/excel', 'kas::excel', ['filter' => 'authfilter']);
$routes->delete('/kas/(:num)', 'kas::delete/$1', ['filter' => 'authfilter']);
$routes->get('/kas/edit/(:segment)', 'kas::edit/$1', ['filter' => 'authfilter']);
// Toko
$routes->get('/toko', 'toko::index', ['filter' => 'authfilter']);
$routes->get('/toko/cetak', 'toko::cetak', ['filter' => 'authfilter']);
$routes->get('/toko/excel', 'toko::excel', ['filter' => 'authfilter']);
$routes->delete('/toko/(:num)', 'toko::delete/$1', ['filter' => 'authfilter']);
$routes->get('/toko/edit/(:segment)', 'toko::edit/$1', ['filter' => 'authfilter']);

// Slider
$routes->get('/slider', 'slider::index', ['filter' => 'authfilter']);
$routes->delete('/slider/(:num)', 'slider::delete/$1', ['filter' => 'authfilter']);
$routes->get('/slider/edit/(:segment)', 'slider::edit/$1', ['filter' => 'authfilter']);

//merk
$routes->get('/merk', 'merk::index', ['filter' => 'authfilter']);
$routes->delete('/merk/(:num)', 'merk::delete/$1', ['filter' => 'authfilter']);
$routes->get('/merk/edit/(:segment)', 'merk::edit/$1', ['filter' => 'authfilter']);
// Diskon
$routes->get('/diskon/Casing', 'diskon::indexCasing', ['filter' => 'authfilter']);
$routes->get('/diskon/Memori', 'diskon::indexMemori', ['filter' => 'authfilter']);
$routes->get('/diskon/Motherboard', 'diskon::indexMotherboard', ['filter' => 'authfilter']);
$routes->get('/diskon/Procesor', 'diskon::indexProcesor', ['filter' => 'authfilter']);
$routes->get('/diskon/Psu', 'diskon::indexPsu', ['filter' => 'authfilter']);
$routes->get('/diskon/Pendingin', 'diskon::indexPendingin', ['filter' => 'authfilter']);
$routes->get('/diskon/Ram', 'diskon::indexRam', ['filter' => 'authfilter']);
$routes->get('/diskon/Vga', 'diskon::indexVga', ['filter' => 'authfilter']);
//wishlist
$routes->get('/wishlist::wish/(:segment)', 'wishlist::wish/$1', ['filter' => 'authfilter']);
//Service
$routes->delete('/service/(:num)', 'service::delete/$1', ['filter' => 'authfilter']);
$routes->delete('/service/ambil/(:any)', 'service::ambil/$1', ['filter' => 'authfilter']);


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

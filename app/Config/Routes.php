<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dashboard_pemilik', 'DashboardPemilik::index');

$routes->get('/penghuni-kos', 'PenghuniKos::index'); // Dashboard Penghuni Kos

$routes->get('/', 'HomeController::index'); // Homepage

$routes->get('/konfirmasi_pembayaran', 'KonfirmasiPembayaran');

$routes->get('/manajemen_kamar', 'ManajemenKamar::index');

$routes->get('/laporan', 'Laporan::index');

$routes->get('/akun_pemilik', 'AkunPemilik::index');


// CRUD Kamar
$routes->get('/tambah_kamar', 'ManajemenKamar::tambah'); // Route untuk menampilkan form tambah kamar
$routes->post('/save', 'ManajemenKamar::save');          // Route untuk menyimpan data kamar baru
$routes->get('/edit_kamar/(:any)', 'ManajemenKamar::getEditKamar/$1'); // Route untuk menampilkan form edit kamar
$routes->post('/update/(:any)', 'ManajemenKamar::update/$1');// Route untuk mengupdate data kamar
$routes->get('/delete/(:any)', 'ManajemenKamar::delete/$1');
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


$routes->get('/tambah_kamar', 'ManajemenKamar::tambah');



$routes->post('/save /tambah_kamar', 'ManajemenKamar::save');

$routes->post('/save', 'ManajemenKamar::save');





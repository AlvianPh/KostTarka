<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dashboard_pemilik', 'DashboardPemilik::index');

$routes->get('/penghuni-kos', 'PenghuniKos::index'); // Dashboard Penghuni Kos

$routes->get('/', 'HomeController::index'); // Homepage


$routes->get('/manajemen_kamar', 'ManajemenKamar::index');

$routes->get('/akun_pemilik', 'AkunPemilik::index');


// CRUD Kamar
$routes->get('/tambah_kamar', 'ManajemenKamar::tambah'); // Route untuk menampilkan form tambah kamar
$routes->post('/save', 'ManajemenKamar::save');          // Route untuk menyimpan data kamar baru
$routes->get('/edit_kamar/(:any)', 'ManajemenKamar::getEditKamar/$1'); // Route untuk menampilkan form edit kamar
$routes->post('/update/(:any)', 'ManajemenKamar::update/$1');// Route untuk mengupdate data kamar
$routes->get('/delete/(:any)', 'ManajemenKamar::delete/$1');


    $routes->get('/konfirmasi_pembayaran', 'KonfirmasiPembayaran');
    $routes->get('/konfirmasi_pembayaran/setujui/(:num)', 'KonfirmasiPembayaran::setujui/$1');


   

    $routes->get('laporan_keuangan', 'LaporanKeuangan::index');
    // $routes->get('laporan_keuangan/filter', 'LaporanKeuangan::filter');
    $routes->post('laporan_keuangan/cetakPdf', 'LaporanKeuangan::cetakPdf');
    $routes->get('laporan_keuangan/cetakPdf', 'LaporanKeuangan::cetakPdf');
    
    
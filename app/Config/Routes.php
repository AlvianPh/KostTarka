<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/', 'HomeController::index'); // Homepage

$routes->get('/dashboard_pemilik', 'DashboardPemilik::index', ['filter' => 'role:pemilik']);

$routes->get('/dashboard_penghuni', 'DashboardPenghuni::index', ['filter' => 'role:penghuni']); // Dashboard Penghuni Kos


$routes->get('/manajemen_kamar', 'ManajemenKamar::index', ['filter' => 'role:pemilik']);

$routes->get('/akun_pemilik', 'AkunPemilik::index', ['filter' => 'role:pemilik']);


// CRUD Kamar
$routes->get('/tambah_kamar', 'ManajemenKamar::tambah', ['filter' => 'role:pemilik']); // Route untuk menampilkan form tambah kamar
$routes->post('/save', 'ManajemenKamar::save', ['filter' => 'role:pemilik']);          // Route untuk menyimpan data kamar baru
$routes->get('/edit_kamar/(:any)', 'ManajemenKamar::getEditKamar/$1', ['filter' => 'role:pemilik']); // Route untuk menampilkan form edit kamar
$routes->post('/update/(:any)', 'ManajemenKamar::update/$1', ['filter' => 'role:pemilik']);// Route untuk mengupdate data kamar
$routes->get('/delete/(:any)', 'ManajemenKamar::delete/$1', ['filter' => 'role:pemilik']);


$routes->get('/konfirmasi_pembayaran', 'KonfirmasiPembayaran', ['filter' => 'role:pemilik']);
$routes->get('/konfirmasi_pembayaran/setujui/(:any)', 'KonfirmasiPembayaran::setujui/$1', ['filter' => 'role:pemilik']);
   

$routes->get('laporan_keuangan', 'LaporanKeuangan::index', ['filter' => 'role:pemilik']);
$routes->post('laporan_keuangan/cetakPdf', 'LaporanKeuangan::cetakPdf', ['filter' => 'role:pemilik']);
$routes->get('laporan_keuangan/cetakPdf', 'LaporanKeuangan::cetakPdf', ['filter' => 'role:pemilik']);


$routes->get('/list-kamar', 'ListKamar::index',['filter' => 'role:penghuni']);

$routes->get('masuk-kamar/(:any)', 'ManajemenKamar::masukKamar/$1', ['filter' => 'role:penghuni']);
$routes->post('/masuk_kamar/(:any)', 'ManajemenKamar::masukKamar/$1', ['filter' => 'role:penghuni']);
$routes->get('/detail-kamar/(:any)', 'ManajemenKamar::detailKamar/$1', ['filter' => 'role:penghuni']);

$routes->get('/pembayaran', 'Pembayaran::index', ['filter' => 'role:penghuni']);
$routes->get('pembayaran', 'Pembayaran::index', ['filter' => 'role:penghuni']);
$routes->post('pembayaran/prosesPembayaran', 'Pembayaran::prosesPembayaran', ['filter' => 'role:penghuni']);
$routes->post('/pembayaran/getHarga', 'Pembayaran::getHarga'); //Sistem Ajax









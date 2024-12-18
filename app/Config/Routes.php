<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



$routes->get('/penghuni-kos', 'PenghuniKos::index'); // Dashboard Penghuni Kos

$routes->get('/', 'HomeController::index'); // Homepage


$routes->get('manajemen_kamar', 'ManajemenKamarController::index');





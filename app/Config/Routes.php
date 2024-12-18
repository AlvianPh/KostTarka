<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
$routes->get('/room', 'RoomController::index');
$routes->get('/reset-password', 'AuthController::resetPasswordForm');
$routes->post('/reset-password', 'AuthController::processResetPassword');

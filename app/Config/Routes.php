<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
$routes->get('/room', 'RoomController::index');
$routes->get('/lupa-password', 'AuthController::resetPasswordForm');
$routes->post('/lupa-password', 'AuthController::processResetPassword');
$routes->get('/reset-password', 'PasswordResetController::index');
$routes->post('/reset-password/process', 'PasswordResetController::process');

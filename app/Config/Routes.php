$routes->get('login', 'Auth::index');
$routes->post('auth/login', 'Auth::login');
$routes->get('auth/forgot-password', 'Auth::forgotPassword');

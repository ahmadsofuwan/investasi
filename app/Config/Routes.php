<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(false);

// raouter=================================================>








$routes->get('/signup', 'Auth::signUp');
$routes->post('/signup', 'Auth::signUpAction');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::loginAction');

$routes->get('/logout', 'Auth::logout');

//admin..
$routes->group('admin', ['filter' => 'auth-admin'], static function ($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('itemList', 'Admin::itemList');
    $routes->get('item/', 'Admin::item');
    $routes->get('item/(:any)', 'Admin::item/$1');
    $routes->post('item', 'Admin::itemInput');
    $routes->get('widrawList', 'Admin::widrawList');
});

//ajax
$routes->post('ajax', 'Ajax::index');


//customer
$routes->group('/', static function ($routes) {
    $routes->get('dashboard', 'Customer::index');
    $routes->get('item', 'Customer::itemList');
});














// raouter=================================================>



if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

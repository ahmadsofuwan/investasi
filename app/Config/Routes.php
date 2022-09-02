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
$routes->set404Override();

// raouter=================================================>







$routes->get('/', 'Home::index');

$routes->get('/signup', 'Auth::signUp');
$routes->post('/signup', 'Auth::signUpAction');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::loginAction');

$routes->get('/logout', 'Auth::logout');

//admin..
$routes->get('admin/itemList', 'Admin::itemList');
$routes->get('admin/item', 'Admin::item');
$routes->post('admin/item', 'Admin::itemInput');

//ajax
$routes->post('ajax', 'Ajax::index');














// raouter=================================================>



if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

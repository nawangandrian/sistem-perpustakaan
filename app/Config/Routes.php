<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// =====================
//  HALAMAN LOGIN AWAL
// =====================
$routes->get('/', 'AuthController::login'); // Root diarahkan ke halaman login

// =====================
//  AUTHENTICATION ROUTES
// =====================
$routes->get('login', 'AuthController::login');
$routes->post('login/attempt', 'AuthController::attemptLogin');
$routes->get('logout', 'AuthController::logout');

// =====================
//  PROTECTED ROUTES (HANYA AKSES SETELAH LOGIN)
// =====================
$routes->group('', ['filter' => 'auth'], function($routes) {

    // DASHBOARD
    $routes->get('dashboard', 'Dashboard::index');

    // BUKU
    $routes->group('buku', function($routes){
        $routes->get('/', 'BukuController::index');
        $routes->get('create', 'BukuController::create');
        $routes->post('store', 'BukuController::store');
        $routes->get('edit/(:num)', 'BukuController::edit/$1');
        $routes->post('update/(:num)', 'BukuController::update/$1');
        $routes->get('delete/(:num)', 'BukuController::delete/$1');
    });

    // KATEGORI
    $routes->group('kategori', function($routes){
        $routes->get('/', 'KategoriController::index');
        $routes->get('create', 'KategoriController::create');
        $routes->post('store', 'KategoriController::store');
        $routes->get('edit/(:num)', 'KategoriController::edit/$1');
        $routes->post('update/(:num)', 'KategoriController::update/$1');
        $routes->get('delete/(:num)', 'KategoriController::delete/$1');
    });

    // PENULIS
    $routes->group('penulis', function($routes){
        $routes->get('/', 'PenulisController::index');
        $routes->get('create', 'PenulisController::create');
        $routes->post('store', 'PenulisController::store');
        $routes->get('edit/(:num)', 'PenulisController::edit/$1');
        $routes->post('update/(:num)', 'PenulisController::update/$1');
        $routes->get('delete/(:num)', 'PenulisController::delete/$1');
    });
});
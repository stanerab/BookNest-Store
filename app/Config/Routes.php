<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\News;
use App\Controllers\Pages;

// Home
$routes->get('/', [Pages::class, 'index']);

// News
$routes->group('news', static function ($routes) {
    $routes->get('/', [News::class, 'index']);
    $routes->get('(:segment)', [News::class, 'show']);
});

// Books - individual book pages
$routes->get('/book/(:any)', [Pages::class, 'book']);

// Basket
$routes->get('basket', [Pages::class, 'basket']);

// Static pages
$routes->get('about', [Pages::class, 'view/about']);
$routes->get('contact', [Pages::class, 'view/contact']);
$routes->get('books', [Pages::class, 'view/books']);
$routes->get('pages', [Pages::class, 'index']);

// Catch-all - must be last
$routes->get('(:segment)', [Pages::class, 'view']);
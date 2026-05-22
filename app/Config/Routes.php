<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Admin\\Dashboard::index');
$routes->get('/artist', 'Artist\\Dashboard::index');
$routes->get('/agency', 'Agency\\Dashboard::index');
$routes->get('/corporate', 'Corporate\\Dashboard::index');
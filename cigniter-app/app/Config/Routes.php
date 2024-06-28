<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'FormController::index');
$routes->get('/home', 'FormController::home');
//$routes->get('/pagina1', 'FormController::p1');
//$routes->get('/pagina2', 'FormController::p2');
//$routes->get('/pagina3', 'FormController::p3');
//$routes->get('/pagina4', 'FormController::p4');
//$routes->get('/login', 'FormController::login');
$routes->get('/about', 'FormController::about');

$routes->get('/pagina1', 'PhotosController::index');


$routes->get('/pagina2', 'ImageController::index');
$routes->get('/upload', 'ImageController::upload');
$routes->post('/save', 'ImageController::save');
$routes->get('/view/(:num)', 'ImageController::view/$1');
$routes->get('/edit/(:num)', 'ImageController::edit/$1');
$routes->post('/update', 'ImageController::update');
$routes->get('/delete/(:num)', 'ImageController::delete/$1');


$routes->match(['get', 'post'], '/pagina4', 'FormController::signin');
$routes->match(['get', 'post'], '/login', 'FormController::login');
$routes->get('/logout', 'FormController::logout');

$routes->get('/pagina3', 'SearchController::index'); 
$routes->post('/search', 'SearchController::search');


$routes->get('/admin', 'AdminController::admin');
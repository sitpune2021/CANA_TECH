<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
 
$routes->get('/', 'Home::index');
$routes->get('/AboutUs', 'Home::AboutUs');
$routes->get('/Service', 'Home::Service');
$routes->get('/Egovernance', 'Home::Egovernance');
$routes->get('/WebDevelopment', 'Home::WebDevelopment');
$routes->get('/Reactjsdevlopment', 'Home::Reactjsdevlopment');
$routes->get('/Appdevelopment', 'Home::Appdevelopment');
$routes->get('/SoftwareDev', 'Home::SoftwareDev');
$routes->get('/DigitalMarketing', 'Home::DigitalMarketing');
$routes->get('/Portfolio', 'Home::Portfolio');
$routes->get('/Angulardevelopment', 'Home::Angulardevelopment');
$routes->get('/Uxdesign', 'Home::Uxdesign');
$routes->get('/Laraveldevelopment', 'Home::Laraveldevelopment');
$routes->get('/CodeigniterDev', 'Home::CodeigniterDev');
$routes->get('/Contentmanagment', 'Home::Contentmanagment');
$routes->get('/Products', 'Home::Products');
$routes->get('/Softdeveloment', 'Home::Softdeveloment');
$routes->get('/Artificialinte', 'Home::Artificialinte');
$routes->get('/MachineLearning', 'Home::MachineLearning');
$routes->get('/GIS', 'Home::GIS');
$routes->get('/ContactUs', 'Home::ContactUs');

$routes->get('home/create', 'Home::create');
$routes->post('home/store', 'Home::store');
$routes->get('home/edit/(:num)', 'Home::edit/$1');
$routes->post('home/update/(:num)', 'Home::update/$1');
$routes->get('home/delete/(:num)', 'Home::delete/$1');

$routes->get('admin/ContactUs', 'Admin::ContactUs');
$routes->match(['get','post'],'/SendContact' , 'Admin::SendContact');

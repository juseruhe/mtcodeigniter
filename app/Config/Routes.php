<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');

// Material
$routes->get('material','MaterialController::index');
$routes->get('material/crear','MaterialController::create');
$routes->post('material','MaterialController::store');
$routes->get('material/(:num)','MaterialController::show/$1');
$routes->get('material/editar/(:num)','MaterialController::edit/$1');
$routes->post('material/(:num)','MaterialController::update/$1');
$routes->get('material/eliminar/(:num)','MaterialController::destroy/$1');


// Categoria
$routes->get('categoria','CategoriaController::index');
$routes->get('categoria/crear','CategoriaController::create');
$routes->post('categoria','CategoriaController::store');
$routes->get('categoria/(:num)','CategoriaController::show/$1');
$routes->get('categoria/editar/(:num)','CategoriaController::edit/$1');
$routes->post('categoria/(:num)','CategoriaController::update/$1');
$routes->get('categoria/eliminar/(:num)','CategoriaController::destroy/$1');

// Color
$routes->get('color','ColorController::index');
$routes->get('color/crear','ColorController::create');
$routes->post('color','ColorController::store');
$routes->get('color/(:num)','ColorController::show/$1');
$routes->get('color/editar/(:num)','ColorController::edit/$1');
$routes->post('color/(:num)','ColorController::update/$1');
$routes->get('color/eliminar/(:num)','ColorController::destroy/$1');

// Clasificación
$routes->get('clasificacion','ClasificacionController::index');
$routes->get('clasificacion/crear','ClasificacionController::create');
$routes->post('clasificacion','ClasificacionController::store');
$routes->get('clasificacion/(:num)','ClasificacionController::show/$1');
$routes->get('clasificacion/editar/(:num)','ClasificacionController::edit/$1');
$routes->post('clasificacion/(:num)','ClasificacionController::update/$1');
$routes->get('clasificacion/eliminar/(:num)','ClasificacionController::destroy/$1');








/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

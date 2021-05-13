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


//Talla
$routes->get('talla','TallaController::index');
$routes->get('talla/crear','TallaController::create');
$routes->post('talla','TallaController::store');
$routes->get('talla/(:num)','TallaController::show/$1');
$routes->get('talla/editar/(:num)','TallaController::edit/$1');
$routes->post('talla/(:num)','TallaController::update/$1');
$routes->get('talla/eliminar/(:num)','TallaController::destroy/$1');


// Tipo de Documento
$routes->get('tipo_documento','TipoDocumentoController::index');
$routes->get('tipo_documento/crear','TipoDocumentoController::create');
$routes->post('tipo_documento','TipoDocumentoController::store');
$routes->get('tipo_documento/(:num)','TipoDocumentoController::show/$1');
$routes->get('tipo_documento/editar/(:num)','TipoDocumentoController::edit/$1');
$routes->post('tipo_documento/(:num)','TipoDocumentoController::update/$1');
$routes->get('tipo_documento/eliminar/(:num)','TipoDocumentoController::destroy/$1');


// Genero
$routes->get('genero','GeneroController::index');
$routes->get('genero/crear','GeneroController::create');
$routes->post('genero','GeneroController::store');
$routes->get('genero/(:num)','GeneroController::show/$1');
$routes->get('genero/editar/(:num)','GeneroController::edit/$1');
$routes->post('genero/(:num)','GeneroController::update/$1');
$routes->get('genero/eliminar/(:num)','GeneroController::destroy/$1');

// País
$routes->get('pais','PaisController::index');
$routes->get('pais/crear','PaisController::create');
$routes->post('pais','PaisController::store');
$routes->get('pais/(:num)','PaisController::show/$1');
$routes->get('pais/editar/(:num)','PaisController::edit/$1');
$routes->post('pais/(:num)','PaisController::update/$1');
$routes->get('pais/eliminar/(:num)','PaisController::destroy/$1');

//Rol
$routes->get('rol','RolController::index');
$routes->get('rol/crear','RolController::create');
$routes->post('rol','RolController::store');
$routes->get('rol/(:num)','RolController::show/$1');
$routes->get('rol/editar/(:num)','RolController::edit/$1');
$routes->post('rol/(:num)','RolController::update/$1');
$routes->get('rol/eliminar/(:num)','RolController::destroy/$1');











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

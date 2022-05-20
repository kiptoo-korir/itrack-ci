<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH.'Config/Routes.php')) {
    require SYSTEMPATH.'Config/Routes.php';
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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/login', 'Auth::loginView', ['as' => 'login-view']);
$routes->get('/signup', 'Auth::signupView', ['as' => 'signup-view']);
$routes->post('/login', 'Auth::login', ['as' => 'login']);
$routes->post('/signup', 'Auth::signup', ['as' => 'signup']);
$routes->get('/about', 'About::aboutPage', ['as' => 'about']);
$routes->get('/test', 'Test::test');

$routes->group('', ['filter' => 'auth'], function ($routes) {
    // View routes passed through filter
    $routes->group('', ['filter' => 'userinfo'], function ($routes) {
    });
    $routes->get('/tasks', 'Task::taskView', ['as' => 'task']);
    $routes->get('/', 'Home::index', ['as' => 'home']);
    $routes->get('/get-tasks', 'Task::getTasks', ['as' => 'get-tasks']);
    $routes->post('/delete-task', 'Task::deleteTask', ['as' => 'delete-task']);
    $routes->post('/update-task', 'Task::updateTask', ['as' => 'update-task']);
    $routes->post('/add-task', 'Task::createTask', ['as' => 'add-task']);

    $routes->post('/logout', 'Auth::logout', ['as' => 'logout']);
});

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
if (file_exists(APPPATH.'Config/'.ENVIRONMENT.'/Routes.php')) {
    require APPPATH.'Config/'.ENVIRONMENT.'/Routes.php';
}

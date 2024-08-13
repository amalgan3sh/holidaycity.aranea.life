<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/survey', 'Home::Survey');
$routes->post('/submit_survey', 'Home::SubmitSurvey');

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/survey', 'Home::Survey');
$routes->post('/submit_survey', 'Home::SubmitSurvey');
$routes->get('/overview', 'Home::Overview');
$routes->get('/our_inspiration', 'Home::OurInspiration');
$routes->get('/vision_and_mission', 'Home::VisionAndMission');
$routes->get('/target_audience', 'Home::TargetAudience');
$routes->get('/new_retirement_trends', 'Home::NewRetirementTrends');
$routes->get('/proposed_project', 'Home::ProposedProject');
$routes->get('/services_and_facilities', 'Home::ServicesAndFacilities');
$routes->get('/plan_and_elevation', 'Home::PlanAndElevation');
$routes->get('/project_layout_and_features', 'Home::ProjectLayoutAndFeatures');
$routes->get('/collaboration_options', 'Home::CollaborationOptions');

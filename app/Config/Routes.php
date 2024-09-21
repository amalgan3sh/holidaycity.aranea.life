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
$routes->get('/proposed_project', 'Home::ProposedProject');
$routes->get('/collaboration_opportunities', 'Home::CollaborationOpportunities');
$routes->get('/project_components', 'Home::ProjectComponents');
$routes->get('/business_model', 'Home::BusinessModel');
$routes->get('/business_strategy', 'Home::BusinessStrategy');
$routes->get('/market_analytics', 'Home::MarketAnalytics');
$routes->get('/technical_feasibility', 'Home::TechnicalFeasibility');
$routes->get('/project_implementation_strategy', 'Home::ProjectImplementationStrategy');
$routes->get('/financial_analysis', 'Home::FinancialAnalysis');

$routes->get('/location', 'Home::KeralaOverview');
$routes->get('/tourist_destinations', 'Home::TouristDestinations');
$routes->get('/cultural_heritage', 'Home::CulturalHeritage');
$routes->get('/healthcare_excellence', 'Home::HealthcareExcellence');
$routes->get('/natural_beauty', 'Home::NaturalBeauty');
$routes->get('/project_location_and_site_analysis', 'Home::ProjectLocationandSiteAnalysis');
$routes->get('/road_map', 'Home::RoadMap');

$routes->get('/director_position', 'Home::DirectorPositions');
$routes->get('/investment_plan', 'Home::InvestmentPlans');
$routes->get('/roi_details', 'Home::ROIDetails');
$routes->get('/security_information', 'Home::SecurityInformation');
$routes->get('/partnership_models', 'Home::PartnershipModels');
$routes->get('/our_company_team', 'Home::OurCompanyTeam');
$routes->get('/contact_details', 'Home::ContactDetails');
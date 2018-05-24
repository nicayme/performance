<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// $route['pages'] = 'pages/sliderimagesedit';
// $route['pages'] = 'pages/sliderimages';
// $route['pages'] = 'pages/testimonialsedit';
// $route['pages'] = 'pages/testimonials';
// $route['pages'] = 'pages/projectedit';
// $route['pages'] = 'pages/projects';
// $route['pages'] = 'pages/servicesedit';
// $route['pages'] = 'pages/services';
// $route['pages'] = 'pages/payment';
// $route['pages'] = 'pages/careers';
// $route['pages'] = 'pages/about';

$route['dashboard'] = 'dashboard/index';

// $route['(:any)'] = 'dashboard/view/$1';

$route['users'] = 'users/login';

$route['default_controller'] = 'pages/view';

// $route['pages'] = 'pages/about';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = 'my404';
$route['translate_uri_dashes'] = FALSE;

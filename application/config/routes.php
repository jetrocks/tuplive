<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'TupLive';
$route['course/create_course'] = 'course/create_course';
$route['inserto'] = 'Sched/inserting';
$route['login'] = 'TupLive/login';
$route['logged'] = 'TupLive/logged';
$route['about'] = 'TupLive/about';
$route['request_success'] = 'TupLive/request_success';

//Admin
$route['admin'] = 'Admin';
$route['pendview/(:any)'] = 'Admin/pendview/$1';
$route['success/(:any)'] = 'Admin/success/$1';
$route['decline/(:any)'] = 'Admin/decline/$1';
$route['canceled/(:any)'] = 'Admin/canceled/$1';
$route['adminproglist'] = 'Admin/adminproglist';
$route['adminprogview/(:any)'] = 'Admin/adminprogview/$1';


$route['about'] = 'TupLive/about';
$route['watchlist'] = 'TupLive/watchlist';
$route['request'] = 'TupLive/request';
$route['schedrequest/(:any)'] = 'Scheduling/index/$1';
$route['addpending'] = 'Scheduling/add_pending';
$route['confirming'] = 'TupLive/confirmation';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

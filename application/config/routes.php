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
$route['default_controller'] = 'welcome/test';
$route['Home'] = 'Home';
$route['logout'] = 'welcome/logout';
$route['company_login'] = 'welcome/company_login';
$route['login'] = 'welcome/login';
$route['employee_login'] = 'welcome/employee_login';
$route['create_challenge'] = 'Home/create_challenge';
$route['company'] = 'Home/company';
$route['add_company'] = 'Home/add_company';
$route['company_list'] = 'Home/company_list';
$route['add_emp/(:any)/(:any)'] = 'Home/add_emp/$1/$2';
$route['test'] = 'welcome/test';
$route['add_employee'] = 'Home/add_employee';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

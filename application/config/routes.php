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
$route['default_controller'] = 'pages/index';
$route['about'] = 'pages/show_about';
$route['contact'] = 'pages/show_contact';
$route['projects'] = 'pages/show_projects';
$route['form'] = 'pages/post_form_data';
//$route['projects/delete/(:any)'] = 'projects/delete_project/$1';
$route['projects/(:any)'] = 'projects/show_project_page/$1';

$route['admin'] = 'admin/index';
$route['admin/login'] = 'admin/input_login_info';
$route['admin/info'] = 'admin/show_info_page';
$route['admin/home'] = 'admin/show_home_page';
$route['admin/about'] = 'admin/show_about_page';
$route['admin/projects'] = 'admin/show_projects_page';
$route['admin/new_project'] = 'admin/show_new_project_page';
$route['admin/logout'] = 'admin/logout_page';
$route['admin/submissions'] = 'admin/show_submissions_page';
$route['admin/(:any)'] = 'admin/show_admin_page/$1';

$route['(:any)'] = 'pages/show_404';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

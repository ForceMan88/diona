<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

//$route['default_controller'] = "admin_panel";


/** Frontend rout*/

$route['default_controller'] = 'IndexController';
$route['search'] = 'indexcontroller/search';
$route['demand'] = 'indexcontroller/demand';
$route['captcha'] = 'indexcontroller/captcha';

$route['about'] = 'cmscontroller/index/about';
$route['services'] = 'cmscontroller/index/services';
$route['vacancy'] = 'cmscontroller/index/vacancy';
$route['credit'] = 'cmscontroller/index/credit';
$route['contacts'] = 'cmscontroller/index/contacts';
//$route['default_controller'] = "admin_panel";
/** Admin rout*/



$route['admin_panel'] = "admin/AuthController";
$route['admin_panel/logout'] = "admin/AuthController/logout";
$route['admin_panel/dashboard'] = "admin/DashboardController";
$route['admin_panel/sales/(:any)'] = "admin/SalesController/$1";
$route['admin_panel/config/(:any)'] = "admin/ConfigController/$1";
$route['admin_panel/import/(:any)'] = "admin/ImportCsvController/$1";
$route['admin_panel/cms/(:any)'] = "admin/CmsController/$1";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
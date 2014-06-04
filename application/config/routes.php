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

switch($_SERVER["SERVER_NAME"]){
    case 'api.trivver.net';
    	$route['social/user/(:any)']='social/user/$1/$2';
		$route['social/callback/(:any)']='social/callback/$1/$2';
		$route['social/action/(:any)']='social/action/$1/$2';
		$route['social/object/(:any)']='social/object/$1/$2';
    break;
    case 'og.trivver.net';
       	$route['(:any)'] = 'dashboard/ogp/$1';
		$route['default_controller'] = 'dashboard/ogp';
    break;
    default;
        $route['(:any)'] = 'dashboard/view/$1';
		$route['default_controller'] = 'dashboard/view';
    break;
}

$route['404_override'] = 'dashboard/view/error';





/* End of file routes.php */
/* Location: ./application/config/routes.php */
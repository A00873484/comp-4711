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
// routes the default to the welcome screen.
$route['default_controller'] = "welcome"; 

// routes /sleep to controller first function zzz.
$route['sleep'] = "first/zzz"; 

// routes /lock/"replace with anything" to controller welcome function shucks.
$route['lock/(:any)'] = "welcome/shucks"; 

// routes /show/"replace with number representing a page" to controller first, function gimme, with input $1(number after show).
$route['show/(:num)'] = "first/gimme/$1";  

// routes /dunno to controller guess.
$route['dunno'] = "guess";

// routes "any 4 letters"/bingo to controller bingo.
$route['[A-Za-z]{4}/bingo'] = "bingo";

// routes comp"anynumber"/anything to controller bingo and function wisdom.
$route['comp[0-9]+/(:any)'] = "bingo/wisdom";

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
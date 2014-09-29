<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "home"; 
$route['explore'] = "explore";
$route['home'] = "home";
$route['about'] = "about";
$route['explore/eat/(:num)'] = "explore/eat/$1";
$route['explore/sleep/(:num)'] = "explore/sleep/$1";
$route['explore/play/(:num)'] = "explore/play/$1";

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
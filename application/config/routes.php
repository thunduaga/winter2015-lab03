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

$route['default_controller'] = "welcome";
$route['sleep'] = 'first/zzz'; 
$route['dunno'] = 'guess';
$route['lock/(:any)/(:any)'] = 'welcome/shucks/';

$route['show/(:num)'] = 'first/gimme/$1';
//'/show/3'
//function gimme($which) 
//OK.. (:num) IS LIKE
//      hey, theres a number being passed into this 
//AND THEN U TAKE THAT AND SAY ITS PASSED INTO
//'first/gimme/'


$route['^[a-z]{4}/bingo'] = 'bingo';
//for regular expressions
//'^[a-z]{4}   MEANS ANY LETTER a-z BUT 4 OF THEM
//then /bingo after whatever

$route['^comp\d{4}/wisdom'] = 'bingo/wisdom';
//OK... IN QUOTES FOR REGULAR EXPRESSIONS
//U GO '^ 
//AND THEN THE NAME OR WHATEVER AND/OR ALL YOUR PARAMETERS
//so for "digits" part, apparently u have to go
//     \d{4} where 4 is the 4 digits 4711
//then /wisdom



$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
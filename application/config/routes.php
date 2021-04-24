<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['registrar'] = 'reg/reg';
// $route['admin'] = 'Admin/reg';
$route['default_controller'] = 'user/reg';
$route['404_override'] = '';
$route['(:any)'] = 'pages/view/$1';
$route['translate_uri_dashes'] = FALSE;

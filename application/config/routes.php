<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'main/view';
$route['(:any)'] = 'main/view/$1';
$route['404_override'] = 'errors/html/error_404';
$route['translate_uri_dashes'] = FALSE;
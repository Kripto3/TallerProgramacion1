<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';

$route['comercializacion'] = 'welcome/comercializacion';
$route['informacion'] = 'welcome/informacion';
$route['catalogo'] = 'welcome/catalogo';
$route['quienesSomos'] = 'welcome/quienesSomos';
$route['consultas'] = 'welcome/consultas';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

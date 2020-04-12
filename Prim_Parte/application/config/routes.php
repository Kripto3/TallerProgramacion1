<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';

$route['principal']= 'welcome/index';
$route['comercial']= 'welcome/comercializacion';
$route['informacion']= 'welcome/informacion';
$route['catalogo']= 'welcome/catalogo';
$route['quienes-somos']= 'welcome/quienesSomos';
$route['consultas']= 'welcome/consultas';
$route['terminos-y-condiciones']= 'welcome/terminos';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

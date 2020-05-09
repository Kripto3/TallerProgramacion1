<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';

//Definimmos las rutas para welcome nuestro controlador principal
$route['principal']= 'welcome/index';
$route['comercial']= 'welcome/comercializacion';
$route['informacion']= 'welcome/informacion';
$route['catalogo']= 'welcome/catalogo';
$route['quienes-somos']= 'welcome/quienesSomos';
$route['consultas']= 'welcome/consultas';
$route['terminos-y-condiciones']= 'welcome/terminos';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//rutas para validar datos de los formularios

$route['registrarse'] = 'welcome/registrarse';
$route['verificar_registro']= 'back/registro_controller';
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


//rutas para ingresar y registrarse
$route['registrarse'] = 'welcome/registrarse';
$route['login'] = 'welcome/login';

//rutas para validar datos de los formularios
$route['verificar_registro']= 'back/registro_controller';
$route['verifico_usuario'] = 'back/login_controller';


//rutas para el panel luego de loguearse el usuarioy de logout
$route['panel']= 'back/panel_controller';
$route['logout']= 'back/panel_controller/logout';

//rutas para los productos 
$route['productos']= 'back/producto_controller/index';

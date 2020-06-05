<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'primera_parte_controller';
$route['registro'] = 'primera_parte_controller/registro';
$route['editar/(:num)'] = 'producto_controller/editar_producto/$1';
$route['eliminar/(:num)'] = 'producto_controller/eliminar_producto/$1';
$route['activar/(:num)'] = 'producto_controller/activar_producto/$1';
$route['gestion'] = 'producto_controller/gestionar_productos';
$route['agregar'] = 'producto_controller/index';
$route['pedidos'] = 'pedido_controller/pedidos';
$route['pedidos/(:num)'] = 'pedido_controller/pedidos/$1';
$route['consultas'] = 'consultas_controller/consultas';
$route['consolas'] = 'primera_parte_controller/consolas';
$route['consolas/(:num)'] = 'primera_parte_controller/consolas/$1';
$route['accesorios'] = 'primera_parte_controller/accesorios';
$route['accesorios/(:num)'] = 'primera_parte_controller/accesorios/$1';
$route['contacto'] = 'primera_parte_controller/contacto';
$route['juegos/(:num)'] = 'primera_parte_controller/juegos/$1';
$route['juegos/(:num)/(:num)'] = 'primera_parte_controller/juegos/$1/$2';
$route['quienesSomos'] = 'primera_parte_controller/quienesSomos';
$route['terminos'] = 'primera_parte_controller/terminos';
$route['carrito'] = 'carrito_controller/index';
$route['inicio'] = 'primera_parte_controller/index';
$route['guardar_pedido'] = 'pedido_controller/guardar_pedido';
$route['iniciar_sesion'] = 'primera_parte_controller/iniciar_sesion';
$route['cerrar_sesion'] = 'primera_parte_controller/cerrar_sesion';
$route['agregar_al_carrito'] = 'carrito_controller/agregar_carrito';
$route['ver_pedido/(:num)'] = 'pedido_controller/ver_pedido/$1';





$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


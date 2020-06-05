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
$route['alta_producto']= 'back/producto_controller/form_agrega_producto';
$route['verifico_modificaproducto/(:num)']='back/producto_controller/modificar_producto/$1';
$route['verifico_nuevoproducto']= 'back/producto_controller/agrega_producto';
$route['modifica_producto/(:num)']='back/producto_controller/muestra_modificar/$1';

//ruta para verificar datos del producto(BAJA)
$route['baja_producto/(:num)']='back/producto_controller/eliminar_producto/$1';
$route['activa_producto/(:num)']='back/producto_controller/activar_producto/$1';
$route['productos_eliminados']='back/producto_controller/muestra_eliminados';

//ruta para Carrito
$route['mostrar_electrodomesticos']= 'back/carrito_controller/electrodomesticos';
//$route['electrodomesticos']='back/carrito_controller/electrodomesticos'; ES EL DE ARRIBA
$route['carrito_agrega']='back/carrito_controller/add';
$route['carrito_actualiza']='back/carrito_controller/actualiza_carrito';
$route['borra_carrito/(:any)']='back/carrito_controller/remove/$1';
$route['comprar']='back/carrito_controller/muestra_compra';

$route['confirmar_compra']='back/carrito_controller/guarda_compra';

//ruta para usuarios
 $route['ver_usuarios']='back/usuario_controller';
 $route['ver_admin']='back/usuario_controller/muestra_admin';
 $route['ver_clientes']='back/usuario_controller/muestra_clientes';
 $route['usuarios_eliminados']='back/usuario_controller/muestra_eliminados';
 $route['agrega_usuarios']='back/usuario_controller/agregar_nuevo_usuario';
 $route['verificar_usuario']='back/usuario_controller/verificar_usuario';
 $route['modificar_usuario']='back/usuario_controller/modificar_usuario';
 
 //baja_logica
 $route['baja_usuario/(:num)']='back/usuario_controller/eliminar_usuario/$1';
 $route['activa_usuario/(:num)']='back/usuario_controller/activar_usuario/$1';

//$route['confirmar_compra']='back/carrito_controller/get_id_usuario';
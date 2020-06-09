<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';

//Definimmos las rutas para welcome nuestro controlador principal
$route['principal']= 'welcome/index';
$route['comercial']= 'welcome/comercializacion';
$route['informacion']= 'welcome/informacion';
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

//rutas para los productos por categoria
$route['productos/auriculares']= 'back/producto_controller/mostrar_auriculares';
$route['productos/mouse']= 'back/producto_controller/mostrar_mouses';
$route['productos/teclado']= 'back/producto_controller/mostrar_teclados';
$route['productos/monitor']= 'back/producto_controller/mostrar_monitores';
$route['productos/notebook']= 'back/producto_controller/mostrar_notebooks';
$route['productos/escritorio']= 'back/producto_controller/mostrar_escritorios';


//ruta para verificar datos del producto(BAJA)
$route['baja_producto/(:num)']='back/producto_controller/eliminar_producto/$1';
$route['activa_producto/(:num)']='back/producto_controller/activar_producto/$1';
$route['productos_eliminados']='back/producto_controller/muestra_eliminados';

//ruta para Carrito
$route['catalogo']= 'back/carrito_controller/productos';
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
 
 //acciones para usuario
 $route['baja_usuario/(:num)']='back/usuario_controller/eliminar_usuario/$1';
 $route['activa_usuario/(:num)']='back/usuario_controller/activar_usuario/$1';
 $route['modificar_usuario/(:num)']='back/usuario_controller/modificar_usuario';
 $route['verificar_modificar_usuario/(:num)']='back/usuario_controller/verificar_modificar_usuario';

//Consultas
$route['ver_consultas']='back/consultas_controller';
$route['ver_archivados']='back/consultas_controller/muestra_eliminados';
$route['verifico_consultas']='back/consultas_controller/alta_consultas';
$route['archiva_consulta/(:num)']='back/consultas_controller/archivar_consulta/$1';
$route['restaurar_consulta/(:num)']='back/consultas_controller/restaurar_consulta/$1';



//$route['confirmar_compra']='back/carrito_controller/get_id_usuario';

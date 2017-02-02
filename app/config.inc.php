<?php
//info base de datos
define('NOMBRE_SERVIDOR','localhost');
define('NOMBRE_USUARIO','root');
define('PASSWORD','');
define('NOMBRE_BD','gigena');


//RUTAS PARA EL RESPONSIVE



/////////////////
//rutas de la web
define('SERVIDOR','http://webs/gigena/');
define('RUTA_APP','app/');
define('INDEX_URL','/gigena');
define('RUTA_CONFIG',RUTA_APP.'config.inc.php');
define('RUTA_ESTRUCTURAS_ADMIN','estructuras/admin/');
define('RUTA_FUNCIONES_APP',RUTA_APP.'funciones_app/');

/////carpeta vistas
define('RUTA_VISTA','vistas/');
define('RUTA_INICIO',RUTA_VISTA.'inicio.php');
/////////////////carpeta especial
define('RUTA_VISTA_ESPECIAL',RUTA_VISTA.'/especial/');
define('RUTA_LOGIN','login');
define('RUTA_IMG',SERVIDOR.'imgs/');
define('RUTA_PANELADMIN',RUTA_VISTA.'especial/admin');
define('RUTA_REGISTRO','registro');
/////////////////carpeta articulos
define('RUTA_VISTA_ARTCICULO',RUTA_VISTA.'articulos/');
//recursos
define('RUTA_CSS', SERVIDOR .'css/');
define('RUTA_JS', SERVIDOR .'js/');
//RUTAS RESPONSIVE
define('CSS_FHD','<link rel="stylesheet" type="text/css" media="(min-width:1380px)" href="'.RUTA_CSS.'responsive/responsive_fhd.css">');
define('CSS_HD','<link rel="stylesheet" type="text/css" media="(min-width:768px) and (max-width:1380px)" href="'.RUTA_CSS.'responsive/responsive_hd.css">');
define('CSS_MOBIL','<link rel="stylesheet" type="text/css" media="(min-width:320px) and (max-width:479px)" href="'.RUTA_CSS.'responsive/responsive_m.css">');
define('IMPORTAR_RESPONSIVE',CSS_FHD.PHP_EOL.CSS_HD.PHP_EOL.CSS_MOBIL);

<?php
include_once 'app/config.inc.php';
include_once 'app/Urls.inc.php';
include_once 'app/RedireccionUrl.inc.php';
session_start();
$m_url = new Urls();
$url_componentes = parse_url($_SERVER['REQUEST_URI']);
$obteniendo_url= $m_url->ObtenerPath($url_componentes);
$url_actual = '';

if (!$obteniendo_url){
	$url_actual =RUTA_INICIO;
}
else {
	//aca todavia puede haber una url de tipo 1 o tipo 2 entonces validar
	$url_pack = $m_url->Obtener_Seccion_Url();
	$url_actual =$m_url->Url_Amigable($url_pack);
	$para = $m_url->obtener_parametro();


}
if(!empty($url_actual['articulo'])&& isset($url_actual['url'])){
	$datos_individual = $url_actual['articulo'];
	$direccion[0]= $url_actual['url'];
	$url_dirigir = $m_url->Url_Amigable($direccion);

}
else{
	$url_dirigir = $url_actual;
}

include_once $url_dirigir;

function content_generico($url,$titulo,$img_slide,$contenido){

$str = 'estructuras/';
$ext = '.php';
$url = $str.$url.$ext;
$txt_titulo = $titulo;
$url_img_slide =RUTA_IMG.'slideshow/'.$img_slide;
if(isset($contenido) && !empty($contenido)){
	$url_img_slide ='../'.RUTA_IMG.'slideshow/'.$url_img_slide;
}
include_once $url;



}
?>
<!--aca tengo lo ultimo de la web, recursos que se comparten en todas las paginas individuales -->
<?php include_once 'estructuras/footer.php';?>
</body>
<script type="text/javascript" src="<?php echo RUTA_JS?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>jquery-ui.min.js"></script>
<script src="<?php echo RUTA_JS?>jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>index.js"></script>
</html>

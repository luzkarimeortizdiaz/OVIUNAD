<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Programaci&oacute;n web</title>
<link rel="icon" type="image/ico" href="ico.ico">
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<link href="js/unslider-master/dist/css/unslider.css" rel="stylesheet" type="text/css">
<link href="css/popup.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/unslider-master/src/js/unslider.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/unslider-master/dist/js/unslider-min.js"></script>
<script type="text/javascript" src="js/enlace.js"></script><script type="text/javascript" src="js/funcion.js"></script>
<script>
		jQuery(document).ready(function($) {
			$('.my-slider').unslider({autoplay: true, arrows: false, keys: false, nav: false});
			$('.vertical-slider').unslider({autoplay: true, arrows: false, keys: false, nav: false, animation: 'vertical'});
			$('.vertical-slider2').unslider({autoplay: true, arrows: false, keys: false, nav: false, animation: 'vertical'});			
		});
	</script>
</head>
<body><?php require('conexion/conexion_db.php');
$conexion=Db::getInstance();?>
<section><header><center><img title="Universidad Nacional Abierta y a Distancia" class="logo" src="img/logotipo_unad.png"></center></header><nav><ul><li><a href="#" id="inicio" title="INICIO">INICIO</a></li><li><a href="#" id="cursos" title="CURSOS">CURSOS</a></li><li><a href="#" title="DESCARGAS">DESCARGAS</a></li><li></li><li><a href="#" title="SOPORTE">SOPORTE</a></li><li><a href="#" title="COMUNIDAD W3C" id="w3c">COMUNIDAD</a></li><li><a href="#"><img src="img/header/7.png" title="BUSCAR"></a></li></ul></nav><section id="remove">
<section class="imagenes"><div class="my-slider"><ul>
<?php  
$sql1='SELECT * FROM imagenes WHERE id_imagen=1';
$stmt=$conexion->ejecutar($sql1);
while($caj2=$conexion->obtener_fila($stmt,0)){
	for ($i = 1; $i <=3; $i++) {
  	echo"<li><img src='img/header/$caj2[name_imagen]'>
</li>";}}
unset($sql1);
?>
</ul></div></section><section class="image_static"><article id="pre_fase"><div class="vertical-slider"><ul>
<?php  
$sql2='SELECT * FROM imagenes WHERE id_imagen=2';
$stmt2=$conexion->ejecutar($sql2);
while($caj3=$conexion->obtener_fila($stmt2,0)){
	for ($i = 1; $i <=3; $i++) {
  	echo"<li><img src='img/header/$caj3[name_imagen]'>
</li>";}}
unset($sql2);
?>
</ul></div>
</article><article class="cent"></article><article id="rw"><div class="vertical-slider2"><ul><?php  
$sql3='SELECT * FROM imagenes WHERE id_imagen=3';
$stmt3=$conexion->ejecutar($sql3);
while($caj4=$conexion->obtener_fila($stmt3,0)){
	for ($i = 1; $i <=3; $i++) {
  	echo"<li><img src='img/header/$caj4[name_imagen]'>
</li>";}}
unset($sql3);
$conexion->__destruct();
unset($conexion);
?></ul></div></article></section></section><div id="popup" style="display:none;">hola</div><div class="popup-overlay" style="height:100%;"></div>
<section class="contacto"><article class="mt"></article><article class="cent"><article><p class="rig">Mantente en contacto</p></article><article><input type="email" class="eml1" name="email1" placeholder="Añadir Correo"><input class="sub" type="submit" value="Suscribete"></article></article><article class="mt"></article></section>
<section><p class="w3c">W3C Comunidad</p><p class="w3c"><input type="button" onClick="window.open('http://www.w3c.es/Prensa/2012/nota120509_Miembros2012.html','_blank');" value="Visitar la comunidad" class="sub2"></p></section>
<section class="eqt"><section>Ciencia<br/><img src="img/header/4.png" class="ab"></section><section>Tecnolog&iacute;a<br/><img src="img/header/5.png" class="ab"></section><section>Innovaci&oacute;n<br/><img src="img/header/6.png" class="ab"></section><center><hr></center><br></section>
<section><p class="tc">© 2017 UNAD, Diseño de Sitios Web. Todos los derechos reservados.<br/><span>T&eacute;rminos de Servicio | Pol&iacute;tica de Privacidad</span></p></section>
</section>
</body>
</html>

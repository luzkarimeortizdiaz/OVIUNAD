<script>
jQuery(document).ready(function($) {
			$('.my-slider').unslider({autoplay: true, arrows: false, keys: false, nav: false});
			$('.vertical-slider').unslider({autoplay: true, arrows: false, keys: false, nav: false, animation: 'vertical'});
			$('.vertical-slider2').unslider({autoplay: true, arrows: false, keys: false, nav: false, animation: 'vertical'});			
		});
			</script>
<section class="imagenes"><div class="my-slider"><ul>
<?php  
require('../../conexion/conexion_db.php');
$conexion=Db::getInstance();
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
?></ul></div></article></section>
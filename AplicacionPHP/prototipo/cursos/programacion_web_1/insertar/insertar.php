<article id="pre_fase">
<div class="reduc">
<?php require('../../../conexion/conexion_db.php');
$conexion=Db::getInstance();
$sql4='SELECT * FROM contenido WHERE cont_id=3';
$stmt5=$conexion->ejecutar($sql4);
while($caj5=$conexion->obtener_fila($stmt5,0)){	
  	echo"<p class='title_cont'>$caj5[cont_title]</p><br/><p class='subtitle_cont'>$caj5[cont_subtitle]</p><br/><p class='prog_cont'>$caj5[cont_prog]</p>
	";
	$data=$caj5['cont_desc'];}
unset($sql4);
?>
<div class="contenedor_bien">
<?php 
$partes = explode("<br>", $data);
for($i=0; $i<count($partes); $i++){
	echo"<div class='ico_bien'><img src='img/bien.png' class='preloader'></div><div class='cont_bien'>".$partes[$i]."<br></div>";}
?>
<input type="button" class="access" title="Continuar" value="Continuar" id="login">
</div></div>
</article>
<article class="cent"></article>
<article><div class="vertical-slider2"><ul><?php  
$sql3='SELECT * FROM imagenes WHERE id_imagen=6';
$stmt3=$conexion->ejecutar($sql3);
while($caj4=$conexion->obtener_fila($stmt3,0)){
	for ($i = 1; $i <=3; $i++) {
	  	echo"<li><img src='img/curso/$caj4[name_imagen]'>
</li>";}}
unset($sql3);
$conexion->__destruct();
unset($conexion);
?></ul></div></article>
<script>jQuery(document).ready(function($) {
	$('.vertical-slider2').unslider({autoplay: true, arrows: false, keys: false, nav: false});
$('.access').click(function(event){  
event.preventDefault();  
$('#popup').fadeIn('slow');      
		$('.popup-overlay').css('opacity', '0.5');       	
		$('.popup-overlay').fadeIn('slow');
		$('.popup-overlay').height($(window).height());	
		$('#popup').html('<p><img src="img/prelogin.gif" /><br />Cargando datos<br/>Aguarde por favor...!</p><br>');		
$.post('cursos/programacion_web_1/consul.php',{},function(exito){$('#popup').html(exito)});	
		  
		return false;
   });
   });
</script>



$(document).ready(function(e) {
//boton inicio///	
$('#inicio').click(function(event){	
	event.preventDefault();
	cargarimagenloader('.imagenes');
$('.imagenes').css({'color':'','font-size':'','background':''})
cargarimagenloader('#remove');
$.post('cursos/programacion_web_1/imagenes_r.php',{},function(cargo){$('#remove').html(cargo)}); 
});
//boton cursos//
$('#cursos').click(function(event){	
	event.preventDefault();
	cargarimagenloader('.imagenes');
$('.imagenes').html('<p class="tlt">Programaci&oacute;n Web</p>')
$('.imagenes').css({'color':'#FFFFFF','font-size':'1em','background':'#1D70B7','margin-bottom':'10px'})
cargarimagenloader('.image_static');
$.post('cursos/programacion_web_1/pre_contenido.php',{},function(cargo){$('.image_static').html(cargo)});
});
//boton comunidad//
$("#w3c").click(function(event) {
	url="http://www.w3c.es/Prensa/2012/nota120509_Miembros2012.html";
window.open(url, '_blank');
      return false;
   });
});
<div class="content-popup">
        <div class="close"><a href="#" id="close"><img src="img/close.png"/></a></div>
        <div>      
           <h5>Programaci&oacute;n Web 1</h5><br/>
           <div id="se">
           <div class="eat">Conectar una Base de Datos<br/><a href="#" title="Conectar" id="cb"><img src="img/image_selector/conectar.png" /></a></div><div class="eat">Insertar Registros de una Base de Datos<br/><a href="#" title="Consultar" id="ib"><img src="img/image_selector/insertar.png" /></a></div><div class="eat">Consultar Registros de una Base de Datos<br/><a href="#" id="cbd" title="Consultar"><img src="img/image_selector/consultar.png"/></a></div><div class="eat">Edici&oacute;n de Registros de una Base de Datos<br/><a href="#" title="Editar" id="ebd"><img src="img/image_selector/edicion.png" /></a></div><div class="eat">Actualizaci&oacute;n de Registros de una Base de Datos<br/><a href="#" title="Modificar" id="abd"><img src="img/image_selector/actualizar.png" /></a></div><div class="eat">Eliminaci&oacute;n de Registros de una Base de Datos<br/><a href="#" title="Eliminar" id="elbd"><img src="img/image_selector/eliminar.png" /></a></div></div><br/><br/>
           <div id="recon"></div>           
                      <center><hr class="rh"></center>
           <div id="se"><h4 class="xtb2" style="text-align:center;">© 2017 UNAD, Diseño de Sitios Web. Todos los derechos reservados.</h4></div>
        </div>      
    </div>
<script>
function popupwin()
{$('#popup').fadeOut('slow');   
$('.popup-overlay').fadeOut('slow');}
	$('#close').click(function(){
       popupwin();   
        return false;		 
    });
////////////////botonconectar////
$('#cb').click(function(){
       popupwin();   
	   cargarimagenloader('.image_static');
$.post('cursos/programacion_web_1/conectar/conectar.php',{},function(cargo){$('.image_static').html(cargo)});    
        return false;		 
    });
////////////////botoninsertar////
$('#ib').click(function(){
       popupwin();   
	   cargarimagenloader('.image_static');
$.post('cursos/programacion_web_1/insertar/insertar.php',{},function(cargo){$('.image_static').html(cargo)});    
        return false;		 
    });
	////////////////botonconsultar////
$('#cbd').click(function(){
       popupwin();   
	   cargarimagenloader('.image_static');
$.post('cursos/programacion_web_1/consultar/consultar.php',{},function(cargo){$('.image_static').html(cargo)});    
        return false;		 
    });
////////////////botoneditar////
$('#ebd').click(function(){
       popupwin();   
	   cargarimagenloader('.image_static');
$.post('cursos/programacion_web_1/editar/editar.php',{},function(cargo){$('.image_static').html(cargo)});    
        return false;		 
    });
	////////////////botonactualizar////
$('#abd').click(function(){
       popupwin();   
	   cargarimagenloader('.image_static');
$.post('cursos/programacion_web_1/actualizar/actualizar.php',{},function(cargo){$('.image_static').html(cargo)});    
        return false;		 
    });
		////////////////botonactualizar////
$('#elbd').click(function(){
       popupwin();   
	   cargarimagenloader('.image_static');
$.post('cursos/programacion_web_1/eliminar/eliminar.php',{},function(cargo){$('.image_static').html(cargo)});    
        return false;		 
    });
</script>
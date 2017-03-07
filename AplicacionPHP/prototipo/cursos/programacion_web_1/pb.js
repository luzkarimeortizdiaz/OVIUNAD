<script type="text/javascript">
var cadena = "How are you doing today?";
var nombres = cadena.split(" ");
 for (var i=0; i <nombres.length; i++) {
	 var i=0;
eval("var variable" + i + " = '"+nombres+"'");
document.getElementById("pre_fase").innerHTML = variable+""+i+"";
}

</script>
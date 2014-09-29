<?php /*
<script languaje="javascript">
var inicio = 10;
var tmp;
var sURL = unescape(window.location.pathname);

function contar() {
inicio--;
document.getElementById('tiempo').innerHTML = inicio;
alert ("hola3");
if (inicio==0) {
	clearInterval(tmp);
	refresh();
} else {
	tmp=setTimeout('contar()',1000);
}
function refresh() {
window.location.replace( sURL );
}
function inicio() {
	alert ("hola4");
	tmp=setTimeout('contar()',1000);
}
</script>
*/ ?>

<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://www.cromosrepes.com/css/tabla_gris.css" rel="stylesheet" 	type="text/css" />
<?php if (isset($espera) && $espera>0) { ?>
<h1>Sistema Ocupado</h1>
<h4><?php echo "Espera ".$espera." segundos, el sistema est&aacute; ocupado";	?></h4>
<?php } else {?>
<h1>Multiples pesta&ntilde;as</h1>
<h4>El sistema de búsqueda no funciona con el bot&oacute;n central</h4>
<?php } ?>
<input type="button" class="btn btn-default" onClick="inicio()" value="Cuenta atrás">


<p id="tiempo">5</p>


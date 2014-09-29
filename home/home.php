<?php //<link href="http://www.cromosrepes.com/css/tabla_gris.css" rel="stylesheet" 	type="text/css" /> ?>



    <h1>Cambia tus cromos con miles de amigos.</h1>
    
    <p>Bienvenido a CromosRepes.com donde podr&aacute;s intercambiar tus cromos repetidos y
       completar tus colecciones de la manera m&aacute;s sencilla.</p>
    <p>No tendr&aacute;s que escribir largas listas de n&uacute;meros en foros, ni tendr&aacute;s que
       buscar dentro de las opiniones de los usuarios.</p>
    <p>Solo tienes que elegir una colecci&oacute;n entre las m&aacute;s de
	<?php echo  anchor  ( 'colecciones', number_format(intval($totales->colecciones->total),0,",",".").' COLECCIONES', array('class'=>'back') );  ?>
       y a&ntilde;adirla a tus colecciones. </p>
    <p>Luego crea tus listas de faltas y repetidos simplemente pinchando con el rat&oacute;n sin esfuerzo.</p>
    <p>Por &uacute;ltimo utiliza el Buscador Autom&aacute;tico, para saber cual de los m&aacute;s de <b>
    <?php echo number_format(intval($totales->usuarios->total),0,",",".") ?></b> compañeros tienen tus faltas y buscan tus repetidos.</p>
    <p>Cambiar cromos es as&iacute; de f&aacute;cil, disfruta acabando tus colecciones y
       ayudando tambi&eacute;n a tus nuevos amigos a terminarlas.</p>

	<p><button class="btn btn-default" onClick="location.href='usuario/registro'">¡Registrate! Es gratis</button></p>
     <hr>
<h1>Ultima actividad</h1>
<table id="tabla">

<div id="contenedor_ranking">
<table>
<?php
	$contador=1;
   	foreach ($coleccion as $col ):
			 echo " ".anchor("/listas/nick/".$col["nick"],$col["nick"] )." se ha unido a la colección   ".
			 anchor("/coleccion/ficha/".$col["esc_nombre"],$col["nombre"])."<p></p> ";
   	endforeach; ?>
</table>
</div>



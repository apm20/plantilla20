<link href="http://www.cromosrepes.com/css/tabla_gris.css" rel="stylesheet" 	type="text/css" />
<link href="http://www.cromosrepes.com/css/colecciones_listado.css" rel="stylesheet" type="text/css" />
<h1><?php echo $title ?></h1>

<div id="contenedor_ranking">
<?php  
	$contador=1;
   	foreach ($datos as $col ):
			 echo "<b>".$contador++."</b> ".
			 anchor("/listas/nick/".$col["nick"],$col["nick"])
			 ."<p></p>";
   	endforeach; ?>

<p style="font-size:small">Nota: los usuarios con menos de 10 evaluaciones est&aacute;n obligados a enviar primero sus cromos para comprobar su fiabilidad en los cambios.</p>
<p></p>
<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php echo anchor  ('ranking'	,'Volver'		,array('class'=>'back')) ?></button>

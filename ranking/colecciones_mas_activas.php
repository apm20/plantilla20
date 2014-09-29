<link href="http://www.cromosrepes.com/css/tabla_gris.css" rel="stylesheet" 	type="text/css" />
<link href="http://www.cromosrepes.com/css/colecciones_listado.css" rel="stylesheet" type="text/css" />
<h1><?php echo $title ?></h1>



<?php  
	$contador=1;
   	foreach ($coleccion as $col ):
			 echo "<b>".$contador++."</b> ".
			 anchor("/coleccion/ficha/".$col["esc_nombre"],$col["nombre"])."</p></p>";
   	endforeach; ?>

<p></p>
<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i> <?php echo anchor  ('ranking'	,'Volver'		,array('class'=>'back')) ?></button><br /><br />

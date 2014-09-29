<link href="http://www.cromosrepes.com/css/tabla_gris.css" rel="stylesheet" 	type="text/css" />
<link href="http://www.cromosrepes.com/css/colecciones_listado.css" rel="stylesheet" type="text/css" />
<h1><?php echo $title ?></h1>


<?php  
   	foreach ($datos as $fila ):
			 echo "  ".
			 $this->estilo->NickReputa($fila["nick"],$fila["total_pos"], $fila["total_neg"], $fila["socio"]) ." <p></p> ";
   	endforeach; ?>

<p></p>
<p style="font-size:small">Nota: los usuarios con dos o m&aacute;s negativos pueden ser expulsados. </p>
<p style="font-size:small">Antes de puntuar a un usuario con un negativo av&iacute;sale envi&aacute;ndole un mensaje.</p>

  <button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php echo anchor  ('ranking'	,'Volver'		,array('class'=>'back')) ?></button>

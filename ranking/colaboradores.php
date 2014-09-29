<link href="http://www.cromosrepes.com/css/tabla_gris.css" rel="stylesheet" 	type="text/css" />
<link href="http://www.cromosrepes.com/css/colecciones_listado.css" rel="stylesheet" type="text/css" />
<h1><?php echo $title ?></h1>
<!-- prueba -->

<?php  
   	foreach ($datos as $col ):
			 echo "<b>".$col["numero"]."</b> <strong> ".
			 anchor("/listas/nick/".$col["nick"],$col["nick"])
			 ."</strong><p></p>";
   	endforeach; ?>

<?php /*
<p style="font-size:small">Nota: si tu  n&uacute;mero de colaborador coincide con el sorteo de la once del d&iacute;a 1 o 15 del mes, puedes elegir uno de los lotes que sorteamos. Suerte y gracias a todos por vuestra aportaci&oacute;n sin la cual CromosRepes.com no existir&iacute;a.</p>
*/ ?>
<p></p>
<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i> <?php echo anchor  ('ranking'	,'Volver'		,array('class'=>'back')) ?></button><br /><br />

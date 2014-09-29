<link href="http://www.cromosrepes.com/css/tabla_gris.css" rel="stylesheet" 	type="text/css" />
<link href="http://www.cromosrepes.com/css/colecciones_listado.css" rel="stylesheet" type="text/css" />
<h1><?php echo $title ?></h1>

<div id="contenedor_ranking">

<?php  
	$noticias = simplexml_load_file('http://cromosrepes.com/xml/col_mas_activa.xml');
//	print_r($noticias);
	$contador=1;
   	foreach ($coleccion as $col ):
			 echo "<b>".$contador++."</b> ".
			 anchor("/coleccion/ficha/".$col["esc_nombre"],$col["nombre"])
			 ." ".$col["cuantos"]."<br>";
   	endforeach; ?>
</div>
<div id="volver">
<?php echo anchor  ('ranking'	,'Volver'		,array('class'=>'back')) ?>
</div>
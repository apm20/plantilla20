<link href="http://www.cromosrepes.com/css/tabla_gris.css" rel="stylesheet" 	type="text/css" />
<link href="http://www.cromosrepes.com/css/colecciones_listado.css" rel="stylesheet" type="text/css" />
<h1><?php echo $title ?></h1>


<?php  
	$contador=($pagina-1)*100;
   	foreach ($datos as $fila ):
			 echo "<b>".++$contador."</b> ".
			 $this->estilo->NickReputa($fila["nick"],$fila["total_pos"], 0, $fila["socio"]) ."<p></p>";
   	endforeach; ?>

<div id="volver">
<?php  if ( $pagina > 1 )
	 	echo anchor ('ranking/usuarios_mejor_evaluados/'.($pagina-1)	,'<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> Anterior</button>'		,array('class'=>'back'))."  ";
 	echo anchor  ('ranking'	,'<button class="btn btn-primary">Volver al ranking</button>'		,array('class'=>'back'));
	if ( $pagina < 5 ) 
	 	echo "  ".anchor ('ranking/usuarios_mejor_evaluados/'.($pagina+1)	,'<button class="btn btn-default">Siguiente <i class="glyphicon glyphicon-chevron-right"> </i> </button>'		,array('class'=>'back')).'<br />';
?>	
</div>

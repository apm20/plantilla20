<link href="http://www.cromosrepes.com/css/tabla_gris.css" rel="stylesheet" 	type="text/css" />
<link href="http://www.cromosrepes.com/css/colecciones_listado.css" rel="stylesheet" type="text/css" />
<h1><?php echo $title ?></h1>

<div id="volver">
<?php Enlaces() ?>
<hr  />
</div>


<?php  
	if ( !isset($datos) || count($datos) == 0 ) {
		echo "no hay usuarios";
	} else {
		$contador=1;
		foreach ($datos as $col ):
				 echo "<b>".$contador++."</b> ".
					anchor("/listas/nick/".$col["nick"],$this->estilo->NickReputa($col["nick"],
						$col["pos"],$col["neg"],$col["socio"],$col["ultimo_login"],$col["v"]))
				 ."<p></p>";
		endforeach; 
    }
?>	



<?php 
function Enlaces () {
	echo anchor  ('ranking'	,'Volver'		,array('class'=>'back'));	
	echo ' | ';
 	for ( $i='A'; strcmp($i,'AA')!=0; $i++)		
	{
 		echo anchor  ('ranking/inicial/'.$i				,$i								,array('class'=>'enlace')).' ' ;
	}  
	for ( $i=0; $i < 10; $i++ )		
	{
 		echo anchor  ('ranking/inicial/'.$i				,$i								,array('class'=>'enlace')).' ' ;
	} 
	echo ' | ';
	echo anchor ('seleccion/buscar', 'Buscador de usuarios');
}
?>

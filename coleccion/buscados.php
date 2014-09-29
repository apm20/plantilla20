<h1>Lista de los cromos m&aacute;s buscados:</h1>


<?php if ( isset($cromos) && count($cromos) ) { ?>
    <div id="lista_colecciones" style="text-align:left">
<?php if ($socio >2 ) { ?>
 	<table> 
<?php	foreach ($cromos as $row): ?>
    		<tr><td
<?php             
            $dificultad=( ($row["t_faltas"]+1)/($row["t_repes"]+1.0));
            if ($dificultad > 20 ) {
				echo " bgcolor='FF0000'	";
			} else if ($dificultad > 7 ) {
				echo " bgcolor='FF3300'	";							
			} else if ($dificultad > 3 ) {
				echo " bgcolor='FF6600'	";											
			} else if ($dificultad > 2.0 ) {
				echo " bgcolor='FF9900'	";			
			} else if ( $dificultad > 1.0 ) {				
				echo " bgcolor='FFCC00'	";			
			} else if ( $dificultad > 0.5 ) {							
				echo " bgcolor='FFFF00'	";			
			}
			
?>			
            >&nbsp;&nbsp;</td><td><?php echo  $row["nombre"] ?></td>
            </tr>
<?php  
		endforeach; ?>
 	</table>         
<?php }else{ ?>
	    <ul style="v">
<?php		foreach ($cromos as $row): ?>
    		<li><?php echo  $row["nombre"] ?></li>
<?php  
		endforeach; ?>
	</ul>
<?php      
}
?>

	</div>
<?php } ?>

<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i> <?php echo $link_back ?></button>

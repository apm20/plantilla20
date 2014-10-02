<h1>
<?php
if ($finalizadas== 0) {
	echo "<i class='fa fa-tasks'></i> Colecciones activas de ".$title;
} else {
	echo "<i class='fa fa-flag-checkered'></i> Colecciones finalizadas de ".$title;
}
?>
</h1>
<?php if (count($colecciones)== 0 ) {
	if ( $visitante == false ) {?>
        <?php if ($finalizadas== 0) {
            echo "<p>No tienes colecciones Activas, revisa la carpeta de Finalizadas, o bien</p><p>".
			anchor ( "colecciones", "Pulsa aqu&iacute; para buscar alguna colecci&oacute;n a la que unirte" )."</p>";
        } else {
            echo "Todav&iacute;a no tienes colecciones acabadas";
        }  ?>
<?php } else { ?>
        <?php if ($finalizadas== 0) { ?>
			<p>El usuario <?php echo  $usuario->nick_mostrar ?> no tiene colecciones Activas<p>
        <?php } else { ?>
            El usuario <?php echo  $usuario->nick_mostrar ?> no tiene colecciones Finalizadas
        <?php }  ?>

<?php	}
} else {
?>
<ul class="nav nav-tabs" role="tablist">
  <li <?php if ($finalizadas== 0) echo 'class="active"'?>> <?php echo anchor("listas/nick/".$usuario->nick_mostrar," <i class='fa fa-tasks'></i> Colecciones activas") ?> </li>
   
  <li <?php if ($finalizadas== 1) echo 'class="active"'?>> <?php echo anchor("listas/finalizadas/".$usuario->nick_mostrar," <i class='fa fa-flag-checkered'></i> Colecciones finalizadas") ?> </li>

</ul>

<div align="center">
<table class="table table-bordered table-hover">
<thead>
   <tr align="center" class="active">
        <td><strong>Título</strong></td>
        <td><strong>Faltas</strong></td>
        <td><strong>Repes</strong></td>
<?php if ($finalizadas == 0){ ?>
        <td><strong>Completado</strong></td>
<?php } else {?>
        <td><strong>D&iacute;as acabar</strong></td>
<?php } ?>
        <td><strong>Ultima Modif.</strong></td>
        <td><strong>Notas</strong></td>
    </tr>
    </thead>
   <tbody>

<?php $url_esc = $this->estilo->EscapaUrl (uri_string());
	$trepes=0;$tfaltas=0;$tporc=0;$porc=0;$tdias=0;
   foreach ($colecciones as $row): ?>
  
	<tr align="center">
	<td align="left">
	<?php if ( $row["autor"]==1 ) {
    	echo "*";
    } ?>
    <?php echo  anchor('listas/detalle/'.$usuario->nick_mostrar.'/'.$row["esc_nombre"].'/'.$this->estilo->EscapaUrl (uri_string()) ,$row["nombre"]) ?>
	</td><td>
    <?php if ($row["t_faltas"]) echo $row["t_faltas"]; ?>
	</td><td>
    <?php if ($row["t_repes"])  echo $row["t_repes"]  ?>
	</td><td>
    <?php
	 if ( isset ($row["tiempo"])  && strlen($row["tiempo"])>1 ){
		 	echo $row["tiempo"];
			$tdias+=$row["tiempo"];
	 } else {
		 if ( $row["cromos"]>0 && $row["t_faltas"]>0) {
			 $porc = round($row["t_faltas"]/$row["cromos"] *100, 1);
			 $ratio=100-$row["t_faltas"]/$row["cromos"]*100; 
			 if ( $porc < 5 ) {
			 	$color="progress-bar-danger";
			 } else {
			 	$color="progress-bar-success";
			 }
			 ?>

		
		  <div class="progress-bar progress-bar-success progress-bar-striped <?php echo $color?>" role="progressbar" aria-valuenow="<?php echo $porc ?>" aria-valuemin="0" 
		  	aria-valuemax="100" style="width: <?php echo 100-round($porc ) ?>%;">
		    <?php echo  100-round($porc )?>%
		  </div>
	
	<?php
			 // echo "<abbr title='".$ratio."'><meter max='100' value='".$ratio."'>".number_format($ratio,2)."%</meter></abbr>";
			 //	echo ( " ".$porc."%" );
	
		 }
	 }
	 ?>
    </td><td>
    <?php echo  $this->estilo->PintaFechaReciente($row["f_modif"]) ?>
	</td><td>
	<?php if (strlen ($row["notas"])>0 ) { ?>
   	<?php echo  $row["notas"] ?>
	<?php }
		$trepes +=$row["t_repes"];
	 	$tfaltas+=$row["t_faltas"];
		$tporc  +=$porc;
	?>
	</td></tr>
	 
<?php endforeach; ?>
</tbody>
<tfoot>
    <tr  align="center" class="active">
        <td><strong><?php echo  count($colecciones)." colecciones" ?></strong></td>
        <td><strong><?php echo  $tfaltas   ?></strong></td>
        <td><strong><?php echo  $trepes    ?></strong></td>
<?php if ($finalizadas== 0) {?>
        <td><strong>
        <?php echo  100-round($tporc/count($colecciones),1)."%" ?></strong></td>
<?php } else { ?>
        <td><strong><?ph echo  "Media: ".round($tdias/count($colecciones),0) ?></strong></td>
<?php } ?>
        <td></td>
        <td></td>
    </tr>
</tfoot>
</table>
</div>
<?php } ?>
<?php echo  enlaces( $link_back, $usuario->nick_mostrar, $visitante  ) ?>
<?php
function enlaces( $link_back, $nick_mostrar, $p_visitante  ) {?>
<?php 
echo anchor("usuario/resumen/"," <button class='btn btn-default'><i class='fa fa-chevron-left'></i> Volver</button>");
?>

<?php if ($p_visitante)
		echo anchor("mensajes/nuevo/".$nick_mostrar, "<button class='btn btn-default'><strong> Enviar mensaje</strong></button>");
		
	
}
?>

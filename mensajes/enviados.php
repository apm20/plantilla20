<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<h1><?php echo $title ?></h1>
<?php echo enlaces()?>
<p></p>
<center>
<table class="table table-bordered table-hover">
<thead>
    <tr align="center" class="active">
        <td width="15%"><strong>Fecha</strong></td>
        <td width="20%"><strong>Destinatario</strong></td>
        <td width="65%"><strong>Asunto</strong></td>
        
    </tr>
</thead>
<tbody>

<?php $url_esc = $this->estilo->EscapaUrl (uri_string());
	$cuantos = 0;
   foreach ($encabezados as $row): ?>

    <?php  if ($row["leido"]==0) echo "<tr class='noleido'  align='center'><td>"; else echo "<tr class='leido' align='center'><td>"; ?>
    <?php echo  $this->estilo->PintaFechaHora($row["f_alta"]) ?>
	</td><td><center>
    <?php echo  anchor('mensajes/detalle/'.$row["id"]."/".$url_esc,$row["nick_mostrar"]) ?>
	<center></td><td align="left">
	<?php if (strlen ($row["asunto"])>0 ) { ?>
		<?php echo  anchor('mensajes/detalle/'.$row["id"]."/".$url_esc,$row["asunto"]) ?>
	<?php }
	$cuantos ++;
	?>
	</td></tr>
<?php endforeach; ?>

</table>
<p></p>


 <?php if ( $cuantos == 0) echo "el buz&oacute;n est&aacute; vac&iacute;o"; ?>


	    
<?php    	if ( $pagina >0)
			echo anchor  ('mensajes/enviados/'.(intval($pagina)-1).'/','<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> Anterior</button>',array('class'=>'back'));
		
?>
		Página <?php echo  $pagina+1 ?>
  	   
<?php      if ( $cuantos >20)
			echo anchor  ('mensajes/enviados/'.(intval($pagina)+1).'/','<button class="btn btn-default">Siguiente <i class="glyphicon glyphicon-chevron-right"> </i></button>',array('class'=>'back'));
		
?>								




<?php 
function enlaces () {
	echo anchor  ('mensajes/menu/'				,'<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> Volver</button>'		,array('class'=>'back')).'  '.
		 anchor  ('seleccion/buscar/mensajes'	,'<button class="btn btn-success"><i class="glyphicon glyphicon-plus"> </i> Escribir mensaje nuevo</button>',array('class'=>'back')).'  '.
		 anchor  ('mensajes/entrada/'			,'<button class="btn btn-default"><i class="glyphicon glyphicon-inbox"> </i> Buzón de entrada</button>'	,array('class'=>'back'));
}
?>
</center>

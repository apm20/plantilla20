<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php setlocale(LC_TIME, 'es_ES'); ?>

<h1><?php echo $title ?></h1>
<center>
<table class="table table-bordered table-hover">
<thead>
   <tr align="center" class="active">
        <td width="10%"><strong>Fecha</strong></td>    
        <td width="25%"><strong>Evaluador</strong></td>
        <td width="5%"><strong>Valor</strong></td>
        <td width="60%"><strong>Comentario</strong></td>
    </tr>
</thead>

<?php $url_esc = $this->estilo->EscapaUrl(uri_string());
   foreach ($evaluaciones as $row): ?>

    <tr><td align="center">
    <?php echo strftime('%d %b %Y',strtotime($row["f_alta"])); ?>
    </td><td>

    <?php echo  $this->estilo->NickReputa($row["nick_mostrar"],$row["total_pos"],$row["total_neg"]) ?>
	</td><td align="center">
    <?php if ($row["valor"]> 0) {
	 		echo "+".$row["valor"];
		}else{
			if ( $row["valor"]==0 )
				echo "<strong>".$row["valor"]."</strong>";
			else
				echo "<font color='red'>".$row["valor"]."</font>";
		}
	?>
	</td><td>
	<?php if (strlen ($row["publico"])>0 ) { ?>
		<?php if ($row["valor"]<> 1 ) echo "<strong>"; ?>
			<?php echo  anchor('evalua/detalle/'.$row["id"]."/".$url_esc,$row["publico"]) ?>
		<?php if ($row["valor"]<> 1) echo "</strong>"; ?>            
	<?php } ?>
	</td></tr>
<?php endforeach; ?><br />
</table>
</center>

<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php echo $link_back; ?></button>
<button class="btn btn-default"><?php echo anchor('evalua/recibidas/'.$sesion["ses_nick_mostrar"],'Recibidas'); ?></button>
<button class="btn btn-default"><?php if ($sesion["ses_socio"]>0 && count($evaluaciones)==20 )
		echo '  '.anchor('evalua/emitidasantiguas/'.$sesion["ses_nick_mostrar"],'Antiguas'); 

?></button>

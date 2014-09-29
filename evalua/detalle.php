<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://cromosrepes.com/css/tabla_detalle.css" rel="stylesheet" 	type="text/css" />

<h1><?php echo $title ?></h1>
<?php $row = $evaluacion[0] ?>
<center>



<table class="table table-bordered">
  <tr>
    <td><strong>Evaluado:</strong> <?php echo  $row["nick_evaluado"] ?></td>
    <td><strong>Evaluador:</strong> <?php echo  $row["nick_evaluador"] ?></td>
  </tr>
  <tr>
    <td><strong>Valor:</strong> <?php if ($row["valor"]> 0) {
		echo "+".$row["valor"];
	}else{
		echo $row["valor"];
	}
?></td>
    <td><strong>Fecha:</strong> <?php $fecha = strtotime($row["f_alta"]);
	if ( $fecha < strtotime ('-3 months') )
		echo ("Hace mucho");
	elseif ( $fecha < strtotime ('-1 months') )
		echo ("Este trimestre");
	elseif ( $fecha < strtotime ('-1 weeks') )
		echo ("Este mes");
	elseif ( $fecha < strtotime ('-2 days') )
		echo ("Esta semana");
	elseif ( $fecha < strtotime ('-1 days') )
		echo ("Antes de ayer");
	elseif ( $fecha < strtotime ('-2 days') )
		echo ("Ayer");
	else
		echo ("Hoy");
?></td>
  </tr>
  <tr>
    <td colspan="2"><strong>Público:</strong> <?php if (strlen ($row["publico"])>0 ) { ?>
	<?php echo  $row["publico"] ?>
<?php } ?></td>
  </tr>
  <?php if (strlen ($row["privado"])>0 &&
		  ($row["evaluado"]==$sesion["ses_usuario_id"] ||
		   $row["evaluador"]==$sesion["ses_usuario_id"]	)) { ?>
  <tr>
    <td colspan="2"><strong>Privado:</strong> <?php echo  $row["privado"] ?></td>
  </tr> 
  <?php } ?>
  </table>






</center>
<br />
<button class="btn btn-default"> <i class="glyphicon glyphicon-chevron-left"> </i> <?php echo $link_back; ?></button>

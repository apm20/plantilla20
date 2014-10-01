<link href="http://www.cromosrepes.com/css/tabla_gris.css" rel="stylesheet" type="text/css" />
<link href="http://www.cromosrepes.com/css/coleccion_ficha.css" rel="stylesheet" type="text/css" />
<h1><?php echo $title ?></h1>
<?php //print_r ($coleccion); ?>

<div class="row">
<div class="col-md-4">
<table class="table-no-border table-condensed">
<tr><td><strong>Año: </strong></td><td><?php echo $coleccion["ano_publica"]?>
<td></tr>
<tr><td><strong>Editorial: </strong></td><td><?php echo $coleccion["editorial_nombre"]?>
<td></tr>
<tr><td><strong>Tipo: </strong></td><td><?php echo $coleccion["tipo_nombre"]?>
<td></tr>
<tr><td><strong>Enlaces: </strong></td><td><?php if ( isset($coleccion["url"]) && strlen($coleccion["url"]) > 0){ ?>
 <?php echo anchor_popup($coleccion["url"],"Ir a la página de la editorial") ?>
 <?php } else { ?>
 No hay enlaces <?php //=anchor($coleccion["url"],"Proponer enlace para la Colección") ?>
 <?php } ?>
<td></tr>
<tr><td><strong>Autor: </strong></td><td><?php echo anchor( 'listas/nick/'.$coleccion["creador_nick"],$coleccion["creador_nick"])?>
<td></tr>
<tr><td><strong>Coleccionistas: </strong></td><td><?php echo $coleccion["coleccionistas"]?>
<td></tr>
<tr><td><strong>Faltas/Repes: </strong></td><td><?php echo $coleccion["faltas"]?>/<?php echo $coleccion["repes"]?>
<td></tr>
</table>
</div>

<div class="col-md-6">
  <strong>Descripción:</strong><br />
  <?php echo $coleccion["descripcion"]?>
</div>
</div><!-- row -->

 <p></p>
 <p></p>
<hr>
<?php // imagenes 

	if (isset($imagenes) && count($imagenes)>0) {
		foreach ( $imagenes as $img ) { 
			$ruta_img=base_url()."img/coleccion/".$img["src"];
		?>
			<a href='<?php echo $img["url"]?>' > 
				<img style='border: 0px' src='<?php echo $ruta_img ?>'>
			</a>
<?php		}
		echo "<hr>";
	}
?>

 <?php echo anchor("coleccion/unirse/".$coleccion["esc_nombre"],"<button class='btn btn-success'><strong>  <i class='fa fa-plus-sign'></i> Apuntarme a la colección</strong>") ?>
<?php echo anchor( "enlaces/coleccion/".$coleccion["id"],"<button class='btn btn-default'><i class='fa fa-link'></i> Enlaces</button>") ?>
<?php echo anchor("coleccion/buscados/".$coleccion["esc_nombre"],"<button class='btn btn-default'><i class='fa fa-zoom-in'></i> Los más buscados</button>")?>
<?php echo anchor("wiki/coleccion/".$coleccion["id"],"<button class='btn btn-default'><i class='fa fa-random'></i> Recomendar</button>")?>

<br /><br />
<?php $cuantos=0;
   if (isset($coleccionistas) && count($coleccionistas)>0 ) { ?>
	<div id="hnick">Usuario</div><div id="hfal">Faltas</div><div id="hrep">Repes</div><div id="hmod">Actualizado</div><br />
<?php foreach ( $coleccionistas as $col ){
    if ( $cuantos<201 ) {
      $cuantos++;
   ?>
<?php	  if ( $col["socio"] > 0 ) { echo "<strong>"; }?>
	<div id="nick"><?php echo  anchor( 'listas/detalle/'.$col["nick"].'/'.$coleccion["esc_nombre"],$this->estilo->NickSeriedad($col["nick"],$col["total_pos"],$col["total_neg"],$col["seriedad"])) ?></div>
    <div id="fal"><?php echo $col["t_faltas"]?></div>
    <div id="rep"><?php echo $col["t_repes"]?></div>
    <div id="mod"><?php echo $col["modif"]?></div>
    <div id="ver"><?php echo  anchor( 'listas/detalle/'.$col["nick"].'/'.$coleccion["esc_nombre"].'/'.$this->estilo->EscapaUrl (uri_string()) ,'<i class="glyphicon glyphicon-eye-open"></i>')?></div>
    <div id="not">
<?php    	if ( strlen ($col["notas"])>80 )
					echo substr($col["notas"],0,80)."...";
				else
					echo $col["notas"];
?>
	</div><br />
	
<?php	   if ( $col["socio"] > 0 ) { echo "</strong>"; }?>
<?php   }
   }
} else {
	 if ( $logado_id > 0 ) {?>
		Todavía no hay coleccionistas, para ser el primero pincha en "Apuntarme a esta colección"
<?php   } else {
		echo '<strong>'.anchor ( 'usuario/login', 'ver '.$coleccion["coleccionistas"].' listas' ).'</strong>';
	 }
} ?>


<br/><br/><br/><br/>
<br/><br/><br/><br/>
<?php if ($cuantos>=200) { ?><br/>Solo se muestran los 200 primeros usuarios que han actualizado listas recientemente<?php } ?>

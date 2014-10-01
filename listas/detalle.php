
<h1><i class="fa fa-list-ul"></i> <?php echo $title ?></h1>
<style type="text/css">
	textarea{resize:none;}
</style>
<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php echo $link_back;?></button>
<?php echo  enlaces( $visitante,$coleccion, $autor,$usuario->nick_mostrar,$usuario->id  ) ?>
<br />    
<p>
<?php if ($visitante) { // -----Repes del visitante----------- ?>
<center>
<table class="table table-bordered">
<thead>
    <tr align="center" class="active">
    <td>
<b>Te puede ofrecer </b>
<?php if ( $socio && isset($te_interesa) && $te_interesa->num_rows != 0) { ?>
	<button class="pull-right btn btn-default btn-xs"> <a href='<?php echo site_url("buscador/cruce/".$logado_id."/".$usuario->id )?>'
			onclick='var w=window.open(this.href,"popupWindow","width="+screen.width+", height="+screen.height+", location=yes, directories=no, menubar=no, scrollbars=yes, status=no","yes"); w.focus(); return false'>Pedir cambio</a></button>	
<?php } ?>
</td></tr></thead>
<tr><td>
<?php	if ( $socio ) {
		if ( !isset($te_interesa) || $te_interesa->num_rows == 0) {
			echo "Nada";
		} else {
			foreach ($te_interesa->result_object() as $row): ?>
					<?php echo  $row->nombre ?>
			<?php endforeach;
		}
	} else {
		echo anchor("ayuda/Colaboradores", "Informaci&oacute;n para colaboradores");
	}
	?>
</td></tr></table>				    
    <br />
<table class="table table-bordered">
<thead>
    <tr align="center" class="active"><td>
<b>Le puedes ofrecer</b>
</td></tr></thead>
<tr><td>
<?php	if ( $socio ) {
		if ( !isset($le_interesa) || $le_interesa->num_rows == 0) {
			echo "Nada";
		} else {
			foreach ($le_interesa->result_object() as $row): ?>
					<?php echo  $row->nombre ?>
			<?php endforeach;
		}
	} else {
		echo anchor("ayuda/Colaboradores", "Informaci&oacute;n para colaboradores");
	}
		
	?>
</td></tr></table>				    
    <br />
<?php } else { // --------no visitante ----------------------- 
		setlocale(LC_TIME, 'es_ES'); ?>

<?php 		foreach ($cu->result_object() as $row):  ?>
		
		</center>
		<center>
	<table class="table table-bordered">
    <tr align="center" class="active"><td width=33%>
    		Empezada: <?php echo strftime('%d %b %Y',strtotime( $row->f_alta )); ?>
		</td><td width=33%>
            <?php if ( $row->t_faltas ) { ?>
	            <span> <?php echo  anchor  ( "listas/marcar/faltas/".$coleccion->id, ' <i class="fa fa-edit"> </i> ', array('class'=>'back') )  ?><span>Faltas:   <?php echo $row->t_faltas?> 
                <?php if ($coleccion->cromos==0 ) {
						$porc = 0;  
				} else {
						$porc = round($row->t_faltas/$coleccion->cromos *100, 1);  
				}
				?>
                <?php echo  "(".$porc."%".")" ?>
            
            <?php } else { 
              		if ( strlen($row->tiempo) >1 ) {?>
	            		<span> <?php echo  anchor  ( "listas/marcar/faltas/".$coleccion->id, ' <i class="fa fa-edit"> </i> ', array('class'=>'back') )  ?><span>Finalizada: <?php echo strftime('%d %b %Y',strtotime( $row->f_fin )); ?>
             	<?php } 
               }  ?> <?php if ($visitante == false) { ?>
 	
<?php  } ?>
            </td><td width=33%>	<span> <?php echo  anchor  ( "listas/marcar/repes/".$coleccion->id, ' <i class="fa fa-edit"> </i> ', array('class'=>'back') )?></span>Repes:    <?php echo $row->t_repes?> <?php if ($visitante == false) { ?>

<?php  } ?></td>
        </tr></table>
		

    

		
		
		
		
	
<?php        endforeach;
    }
?>	
<p></p>
<p></p>


 <table class="table table-bordered">
<thead>
    <tr align="center" class="active">
    <td>
<b>Faltas </b>
<?php if ($visitante == false) { ?>
 <?php echo  anchor  ( "listas/marcar/faltas/".$coleccion->id, '	<button class="pull-right btn btn-default btn-xs">Modificar tus faltas</button>', array('class'=>'back') )  ?>
<?php  } ?>
</td></tr></thead>
<tr><td>
<?php	if ( !isset($faltas) || $faltas->num_rows == 0) {
		echo "No hay faltas";
	} else {
		foreach ($faltas->result_object() as $row): ?>
				<?php echo  $row->nombre ?>
		<?php endforeach;
	}
	?>
</td></tr></table>	



<p></p>				    
<p></p>

    
<table class="table table-bordered ">
<thead>
    <tr align="center" class="active">
    <td>
<b>Repes </b> 
<?php if ($visitante == false) { ?>
<?php echo  anchor  ( "listas/marcar/repes/".$coleccion->id, '	<button class="pull-right btn btn-default btn-xs">Modificar tus repes</button>', array('class'=>'back') )?>
<?php  } ?>
</td></tr></thead>
<tr><td>
<?php	if ( !isset($repes) || $repes->num_rows == 0) {
		echo "No hay repes";
	} else {
		foreach ($repes->result_object() as $row): ?>
				<?php echo  $row->nombre ?>
		<?php endforeach;
	}
	?>
</td></tr></table>
<p></p><p></p>
<?php if ($visitante == false && $coleccion->numeros>0 ){ ?>
<?php if ( $usuario->total_pos>19 || $usuario->socio>0 ) { ?>
<form id="conjuntos" method="post" action="">
<table class="table table-bordered">
<thead>
    <tr align="center" class="active">
   <td>
        <?php echo  form_hidden ("coleccion_id",$coleccion->id) ?>
        
		<button type="submit" class="pull-left btn btn-default btn-xs"  name="operacion" name="alta_faltas" value="alta_faltas" onclick="this.style.visibility = 'hidden';" ><i class="glyphicon glyphicon-plus"> </i> Nuevas faltas</button>
<strong>Listas de números</strong>
<?php if ($faltas->num_rows != 0 ) { ?>
   		<button type="submit" class="pull-right btn btn-default btn-xs" name="operacion" name="borrar_faltas" value="borrar_faltas" onclick="this.style.visibility = 'hidden';"><i class="glyphicon glyphicon-minus"> </i> Borrar faltas</button>
<?php } ?>        
</td>
</tr>
</thead>
<tr>
<td>
	<input type="text" name="conjunto" id="conjunto" class="form-control"  placeholder="Escribe listas de cromos (solo N&uacute;meros) separados por espacio en blanco" />
<?php /*       
        <textarea name="conjunto" id="conjunto" rows="3" cols="80" onclick="this.focus();this.select()">
Escribe listas de cromos (solo N&uacute;meros) separados por espacio en blanco y luego pulsa el bot&oacute;n correspondiente para a&ntilde;adir o quitar repes o faltas.
Truco tablet: separa los cromos con comas. Truco PC: separa cromos con un punto, así puedes usar el teclado numérico con una sola mano.</textarea>
*/ ?>
</td>
</tr>
<td>
		<button type="submit" class="pull-left btn btn-default btn-xs"  id="btn_nuevos_repes" name="alta_repes" value="alta_repes" onclick="this.style.visibility = 'hidden';"><i class="glyphicon glyphicon-plus"> </i> Nuevos Repes</button>
</td>&nbsp;        
<?php if ($repes->num_rows != 0 ) { ?>        
   		<button type="submit" class="pull-right btn btn-default btn-xs" id="btn_borrar_repes" name="borrar_repes" value="borrar_repes" onclick="this.style.visibility = 'hidden';" ><i class="glyphicon glyphicon-minus"> </i> Borrar Repes</button>
<?php } ?>
</td>
</tr>
<tr>
<td>
Truco tablet: separa los cromos con comas.<br />
Truco PC: separa cromos con un punto, así puedes usar el teclado numérico con una sola mano.
</td>
</tr>

</table>
</form>
<?php } ?>    
<?php } // if false ?>
<table class="table table-bordered">
<thead>
    <tr align="center" class="active">
    <td>
<form id="fnotas" method="post" action="">
<fieldset><b>Notas Públicas</b>
</td></tr></thead>
<tr><td>
	<?php	foreach ($cu->result_object() as $row): ?>
		<?php if ($visitante == false) { ?>
   <textarea class="form-control" id="notas" name="notas" rows=2 spellcheck="true"><?php echo $row->notas; ?></textarea>
    <?php }  ?>
    <?php if ($visitante == true) { ?>
   <textarea class="form-control" id="notas" name="notas" rows=2 spellcheck="true" readonly><?php echo $row->notas; ?></textarea>
    <?php }  ?>
	<?php endforeach;  ?>
</td></tr></table>
<br  />
<?php if ($visitante == false) { ?> 
<p></p>
<table class="table table-bordered">
<thead>
    <tr align="center" class="active">
    <td>
<fieldset><b>Mis Notas</b>
</td></tr></thead>
<tr><td>
	<?php	foreach ($cu->result_object() as $row): ?>
    <textarea class="form-control" id="notas_prv" name="notas_prv" rows=2 spellcheck="true"><?php echo $row->notas_prv; ?></textarea>
	<?php endforeach;  ?>
	<br/>
	<center><input class='btn btn-default' type='submit' name='btn_ok' id='btn_ok' value='Guardar notas' onclick="this.style.visibility = 'hidden';" />
   	<input class='btn btn-default' type='reset' name='btn_reset' id='btn_reset' value='Vaciar notas' onclick="this.style.visibility = 'hidden';" /></center>
    </fieldset>    
</td></tr></table>
    </form>
<?php } ?>    
<br />    




<?php
function enlaces( $visitante,$coleccion,$autor,$p_nick,$p_id ) {
	
	if ($visitante == false) {
	 echo "  <b>".anchor  ( "buscador/coleccion/".$p_id."/".$coleccion->id, '<button class="btn btn-primary"><i class="glyphicon glyphicon-transfer"> </i> Buscar quien tiene mis faltas</button>' 	, array('class'=>'back') );
	 echo "</b> ".anchor( "coleccion/borrarlista/".$coleccion->esc_nombre,'<button class="btn btn-default"><i class="glyphicon glyphicon-remove"> </i> Eliminar la lista</button>');
	 if ($autor == 1 )
	 	echo "  ".anchor  ( "wiki/coleccion/".$coleccion->id, ' <button class="btn btn-default">Wiki</button>' 	, array('class'=>'back') );
	} else {
		echo "  ".anchor("mensajes/nuevo/".$p_nick, ' <button class="btn btn-default">Enviar mensaje</button>');		
	}
} ?>
</center>

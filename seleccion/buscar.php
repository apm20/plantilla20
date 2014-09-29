<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<h1><?php echo $title ?></h1>



<form method="post" name="form1" class="main_content" id="form1" action="<?php echo $action; ?>"
onsubmit="return validar(this);">

	<p><?php echo $message; ?> </p>
	
	

    <div class="input-group">
      <input type="text" name="destinatario" class="form-control" placeholder="Introduce el nombre del usuario a buscar  (3 caracteres mínimo)" id=destinatario minlength=80 maxlength=100
      		value="<?php echo set_value('destinatario'); ?>" />
	   		<?php $estilo_class->PintaErrorForm( form_error ('destinatario') ); ?>
		<input type="hidden" name="origen" class="btn btn-default" id=origen value="<?php echo set_value('origen',$origen); ?>" />
      <span class="input-group-btn">
        <button type="submit" class="btn btn-default">Buscar usuario</button>
      </span>
    </div><!-- /input-group -->
    
      <p>   </p>
      
      <p>   </p>
   


<?php if ( isset ($coincidencias) ) { ?>
<table class="table table-bordered table-hover">
<thead>
    <tr align="center" class="active">
        <td colspan=3><strong>Coincidencias</strong></td>
    </tr>
</thead>
<tfoot>
    <tr>
        <td colspan=3><strong>Total:</strong> <?php echo  count($coincidencias)?></td>
    </tr>
</tfoot>
<?php   if ( strlen ($lista_accion)>0 ){
		PintaAccion ( $coincidencias, $lista_accion );
 	} else {
 		// Pintamos primero los asiduos
		$poco_asiduos = PintaMultiple ( $coincidencias, $this, 1 );
		// Si quedaron usuarios poco asiduos los pintamos después
		if ( $poco_asiduos ) {
			echo "<tr><td colspan=3>"." Poco asiduos "."</td></tr>";
			PintaMultiple ( $coincidencias, $this, 0 );
		}
//print_r ( $coincidencias );
	}
?>

</table>
<?php	}	   ?>
</form>
<?php echo $link_back; ?>

<?php function PintaAccion ( $coincidencias, $accion ) {
	foreach ($coincidencias as $row){
		echo '<tr><td width=70%>';
		echo anchor($accion.'/nuevo/'.$row["nick"],$row["nick_mostrar"],array($accion)) ;
		echo '</tr></td>';
   } //foreach
}  //function  ?>


<?php // Pinta multiples opciones
   // Si asiduo>1 queremos pintar solo a los usuarios asiduos (ultima_visita<30 dias)
   // y acumulamos los usuarios que no cumplen la condición para devolver el total restante
   // Si asiduo=0 queremos pintar solo a los no asiduos
   function PintaMultiple ( $con, $este, $asiduo ) {
    $poco_asiduos = 0;
	foreach ($con as $usu){

		if ( ($asiduo> 0 && $usu["ultimo_login"]<=30) ||
		     ($asiduo==0 && $usu["ultimo_login"]> 30) ){
			echo '<tr><td width=70%>';

			echo $este->estilo->NickSeriedad( $usu["nick_mostrar"],$usu["total_pos"],$usu["total_neg"],$usu["seriedad"],
									     $usu["socio"],$usu["ultimo_login"],$usu["velocidad"],$usu["pais_id"]) ;

			echo '</td><td width=15%>'.anchor('mensajes/nuevo/'.$usu["nick"],"<center><i class='glyphicon glyphicon-envelope'></i> Mensaje</center>").'</td>';
			echo '<td width=15%>'.anchor('evalua/nuevo/'.$usu["nick"],"<center><i class='glyphicon glyphicon-sort'></i> Evaluar</center>").'</td></tr>';
		} else {
			$poco_asiduos++;
		}
   } //foreach
   return $poco_asiduos;
}  //function  ?>

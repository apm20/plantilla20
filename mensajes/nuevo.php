<h1><?php echo $title ?></h1>
<style type="text/css">
	textarea {
   resize: vertical;}
</style>
<?php error_log (" DESTINATARIO v".$destinatario." acc ".$accion); ?>
<?php if ( isset($OK) && $OK) {?>
	<p><?php echo $message; ?> </p>
<?php } else {?>
<div id="wait" style="position:absolute; visibility:hidden; z-index:1; " >
<img src="http://www.cromosrepes.com/img/wait_flower.gif">Enviando el mensaje</img>
</div>
<form method="post" name="form1" class="main_content" id="form1" action="<?php echo $action; ?>"
onsubmit="return validar(this);">

	<p><?php echo $message; ?> </p>
	<input type="hidden" name="mensaje_origen" id=mensaje_origen value="<?php echo set_value('mensaje_origen',$mensaje_origen) ?>" />
<!--<input type="hidden" name="accion" id=accion value="<php if (isset( set_value('accion') )) echo set_value('accion'); >" /> -->
	<input type="hidden" name="accion" id=accion value="<?php echo set_value('accion',$accion); ?>" />
	<input type="hidden" name="lista_negra" id=lista_negra value="<?php echo set_value('lista_negra',$lista_negra); ?>" />


<center>
<table class="table table-bordered">
    <tr class="active">
    	<td><input type="text" placeholder="Destinatario" name="destinatario" id=destinatario class="form-control"
      readonly="readonly" value="<?php echo set_value('destinatario',$destinatario ); ?>" />
	   <?php $estilo_class->PintaErrorForm( form_error ('destinatario_error') ); ?><?php if ( $lista_negra==1) {
	echo "<p style='color:red'>DESTINATARIO EN TU LISTA DE IGNORADOS, EL MENSAJE ES MUY PROBABLE QUE NO SEA LEIDO.</p>";
	} ?></td>
	</tr>
	<tr class="active">
    	<td><INPUT type="text" placeholder="Asunto" id=asunto name="asunto" class="form-control"
<?php if ( $accion == 1 || $accion <0 ) echo " readonly "; ?>
      value="<?php echo set_value('asunto',$asunto); ?>" />
	   <?php $estilo_class->PintaErrorForm( form_error ('asunto_error') ); ?></td>
    </tr>
     <tr>
    <td><textarea id=mensaje class="form-control" name="mensaje" placeholder="Mensaje" rows=15><?php echo set_value('mensaje',$mensaje); ?></textarea>
		<?php $estilo_class->PintaErrorForm( form_error ('mensaje_error') ); ?>
		<p></p>
		<center>
    <button id="aceptar" class="btn btn-success" type="submit" onclick="aceptar.visibility=false;">Enviar Mensaje</button>
    <button type="reset" class="btn btn-default">Borrar</button></center>
    </td>
    </tr>
    </table>

    </center>
   </p>
</form>
<?php } ?>

<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php
if ( $tipo_ventana==0 ) {
	echo $link_back;
} else { ?>
	<a onClick="window.close();" href="blank">Volver</a>
<?php
}
?></button>


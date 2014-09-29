<h1>Evaluar a <?php echo $destinatario ?></h1>
<style type="text/css">
	textarea {
   resize: vertical;}
</style>

<?php if ( isset($OK) && $OK) {?>
	<p><?php echo $message; ?> </p>
<?php } else {?>
<form method="post" name="form1" class="main_content" id="form1" action="<?php echo $action; ?>"
onsubmit="return validar(this);">

	<p><?php echo $message; ?> </p>


<div class="input-group">
  <span class="input-group-addon" >
    <span>Nombre del evaluado</span>
  </span>
  <input type="text" name="destinatario" class="form-control" id=destinatario minlength=80 maxlength=100
      readonly="readonly"value="<?php echo set_value('destinatario',$destinatario); ?>" />
	   <?php $estilo_class->PintaErrorForm( form_error('destinatario_error') ); ?>
</div> 
   <p></p>

Valoraci&oacute;n del intercambio


   <p></p>
<?php if ($socio>2) {   ?>
   <div class="radio">
  <label>
    <INPUT type="radio" name="valor" value="2">
      <strong><font color="#009900">+2</font></strong> Perfecto (Inmejorable) 
  </label>
</div>
<?php } ?>
<div class="radio">
  <label>
    <INPUT type="radio" name="valor" value="1">
   <strong><font color="#009900">+1</font></strong> Bien (Completamente satisfecho)
  </label>
</div>
<div class="radio">
  <label>
    <INPUT type="radio" name="valor" value="0">
    <strong><font color="#000000">+0</font></strong> Regular   (te ha llegado su env&iacute;o, pero no te ha satisfecho del todo)
  </label>
</div>
<div class="radio">
  <label>
    <INPUT type="radio" name="valor" value="-1">
   <strong><font color="#FF0000">-1</font></strong> Mal (no te ha llegado su env&iacute;o)
  </label>
</div>
   <?php $estilo_class->PintaErrorForm( form_error('valor_error')   ); ?>
   </p>

<p></p>
      <input type="text" class="form-control" placeholder="Comentario Público" id=mensaje name="publico" size="100" value="<?php echo set_value('publico',$publico); ?>" />
		<?php $estilo_class->PintaErrorForm( form_error('publico_error') ); ?>
  <p></p> 
      <textarea id=mensaje  class="form-control" placeholder="Mensaje Privado (solo lo puede ver el evaluado)" name="privado" rows=4><?php echo set_value('privado',$privado); ?></textarea>
		<?php $estilo_class->PintaErrorForm( form_error('privado_error') ); ?>
		<p></p>

    <center>
    <button type="submit" class="btn btn-success">Evaluar</button>
    <button type="reset" class="btn btn-default">Borrar</button>
    </center>
   </p>
</form>
<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php } echo $link_back; ?></button>

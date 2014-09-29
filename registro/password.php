<h1>Pedir nueva contraseña</h1>

Para enviarte una nueva contraseña o un mensaje de activación, indica la dirección de correo de tu registro.
<p></p>
<div align="center">
<fieldset>
<form method="post" name="form1" class="main_content" id="form1">

<div class="input-group input-group col-md-3">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input type="text" class="form-control" name="email" id="email" placeholder="Escribe tu e-mail" value='<?php echo set_value('email',$email) ?>' />
  	<?php echo form_error('email')?>
</div>
<div class="input-group input-group col-md-3">
  <span class="input-group-addon"><i class="glyphicon glyphicon-repeat"> </i></span>
  <input type="text" class="form-control" name="conf_email" id="conf_email" placeholder="Repite tu e-mail" value='<?php echo set_value('conf_email',$conf_email)?>' />
	<?php echo form_error('conf_email') ?>
</div>
<div class="input-group input-group col-md-3">
  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"> </i></span>
  <input type="text" class="form-control" name="captcha" id="captcha" placeholder="¿Que dice en la imagen?" onclick="this.focus();this.select()"/>
	<?php echo form_error('captcha')?>
</div>
<br/>
<?php echo  $image; ?>
<p></p>
<input type="submit" name="btn_ok" id="btn_ok" value="Enviar Mensaje" class="btn btn-success"  />
  
  
</form>
</fieldset>

</div>

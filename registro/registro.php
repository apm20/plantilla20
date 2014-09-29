<h1>Registrar nuevo usuario</h1>

<script src="http://cromosrepes.com/SpryAssets/SpryValidationTextField.js" 	type="text/javascript"></script>
<script src="http://cromosrepes.com/SpryAssets/SpryValidationPassword.js" 	type="text/javascript"></script>
<script src="http://cromosrepes.com/SpryAssets/SpryValidationConfirm.js" 	type="text/javascript"></script>
<link href="http://cromosrepes.com/SpryAssets/SpryValidationTextField.css" 	rel="stylesheet" type="text/css" />
<link href="http://cromosrepes.com/SpryAssets/SpryValidationPassword.css" 	rel="stylesheet" type="text/css" />
<link href="http://cromosrepes.com/SpryAssets/SpryValidationConfirm.css" 	rel="stylesheet" type="text/css" />

<p>Si eres menor de 14 a&ntilde;os NO puedes registrarte.</p>
<form method="post" name="form1" class="main_content" id="form1">

<center>
<div class="input-group input-group col-md-3">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" name="nick" id="nick" class="form-control" placeholder="Usuario" value='<?php echo set_value('nick',$nick)?>' />
  <?php echo form_error('nick'); ?>
</div>

<div class="input-group input-group col-md-3">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
 <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" value='<?php echo set_value('password',$password)?>' />
 <?php echo form_error('password'); ?>
</div>

<div class="input-group input-group col-md-3">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
 <input type="password" name="conf_password" id="conf_password" class="form-control" placeholder="Repite la contraseña" value='<?php echo set_value('conf_password',$conf_password) ?>' />
 <?php echo form_error('conf_password'); ?>
</div>

<div class="input-group input-group col-md-3">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
 <input type="text" name="email" id="email" class="form-control" placeholder="Correo electrónico" value='<?php echo set_value('email',$email)?>' />
 <?php echo form_error('email'); ?>
</div>

<div class="input-group input-group col-md-3">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
 <input type="text" name="conf_email" id="conf_email" class="form-control" placeholder="Repite el correo electrónico" value='<?php echo set_value('conf_email',$conf_email)?>' />
 <?php echo form_error('conf_email'); ?>
</div>

<div class="checkbox">
    <label>
      <input type="checkbox" name="condiciones" value="condiciones" id="condiciones" /> Acepto condiciones de uso y pol&iacute;tica de privacidad <?php echo form_error('condiciones'); ?><a href="http://www.cromosrepes.com/ayuda/Privacidad">(Ver)</a>
    </label>
  </div>
<input type="submit" class="btn btn-success" name="btn_ok" id="btn_ok" value="Registrarse" />
</center>

</form>
<script type="text/javascript">
<!--
var sprytextfield0 = new Spry.Widget.ValidationTextField("sprytextfield0","none",{hint:"Escribe tu alias", validateOn:["blur"], minChars:3,maxChars:18});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1",{hint:"",isRequired:true, validateOn:['blur'],  minChars:4 });
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "sprypassword1", {validateOn: ['blur'] });
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2","none",{hint:"email", validateOn:["blur"]});
var spryconfirm2 = new Spry.Widget.ValidationConfirm("spryconfirm2","sprytextfield2", {validateOn: ['blur']});
//-->
</script>

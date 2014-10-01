<h1>Iniciar sesión</h1>
<p></p>
<?php if( strlen($mensaje) ): ?>
<p><?php echo $mensaje?></p>
<?php endif; ?>
<script type="text/javascript" src="http://www.cromosrepes.com/js/adsense.js"></script>
<div class="row text-center">
<div class="col-xs-12 col-sm-6 col-lg-6">

<fieldset>
	<form  method="post">
	
<script type="text/javascript">
    if (document.getElementById("ads") == undefined) {
    	document.write( '<input type="hidden" name="ad" id="ad" value="1"/>');
    } else {
    	document.write( '<input type="hidden" name="ad" id="ad" value="0"/>');
    }
</script>	

    <div class="input-group input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="text" name="nick" id="nick" class="form-control" placeholder="Usuario" onclick="this.focus();this.select()" 
        	    value="<?php echo $nick ?>" /></td><td><?php echo form_error('nick')?>
    </div>
    <div class="input-group input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"> </i></span>
      <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" onclick="this.focus();this.select()" 
        	    value="<?php echo $password?>" /><td><?php echo form_error('password')?>
    </div>

    <div class="checkbox">
        <label>
          <input type="checkbox"name="recuerdame" value="1"
		    <?php if ($recuerdame==1) echo "checked"; ?> > Recuérdame
        </label>
      </div>
      <input type="submit" name="submit" id="submit" value="Iniciar sesión" class="btn btn btn-outline btn-success"  />
    </form>
</fieldset>
</div>
<div class="col-xs-12 col-sm-6 col-lg-6 text-center">
<button class="btn btn-default"><b><i class="glyphicon glyphicon-send"> </i> <?php echo anchor('usuario/Registro', 'No tengo cuenta. Quiero registrarme')?></b></button>
<button class="btn btn-default"><i class="glyphicon glyphicon-question-sign"> </i> <?php echo anchor ('usuario/PedirPassword','No recuerdo mi usuario o mi contraseña')?></button>
<button class="btn btn-default"><i class="glyphicon glyphicon-envelope"> </i> <?php echo anchor('usuario/PedirPassword', 'No he recibido el mensaje de activación')?></button>
</div>
</div>

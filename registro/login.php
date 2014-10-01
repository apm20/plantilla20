<h1>Iniciar sesión</h1>
<p></p>
<?php if( strlen($mensaje) ): ?>
<p><?php echo $mensaje?></p>
<?php endif; ?>
<script type="text/javascript" src="http://www.cromosrepes.com/js/adsense.js"></script>

<center>

<fieldset>
	<form  method="post">
	
<script type="text/javascript">
    if (document.getElementById("ads") == undefined) {
    	document.write( '<input type="hidden" name="ad" id="ad" value="1"/>');
    } else {
    	document.write( '<input type="hidden" name="ad" id="ad" value="0"/>');
    }
</script>	

    <div class="input-group input-group col-md-3">
      <span class="input-group-addon"><i class="fa fa-user"></i></span>
      <input type="text" name="nick" id="nick" class="form-control" placeholder="Usuario" onclick="this.focus();this.select()" 
        	    value="<?php echo $nick ?>" /></td><td><?php echo form_error('nick')?>
    </div>
    <div class="input-group input-group col-md-3">
      <span class="input-group-addon"><i class="fa fa-lock"> </i></span>
      <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" onclick="this.focus();this.select()" 
        	    value="<?php echo $password?>" /><td><?php echo form_error('password')?>
    </div>

    <div class="checkbox">
        <label>
          <input type="checkbox"name="recuerdame" value="1"
		    <?php if ($recuerdame==1) echo "checked"; ?> > Recuérdame
        </label>
      </div>
      <input type="submit" name="submit" id="submit" value="Iniciar sesión" class="btn btn btn-outline btn-success"  /> o <?php echo anchor('usuario/Registro', '<button class="btn btn-outline btn-info btn-sm"><i class="glyphicon glyphicon-send"> </i> Registrarme</button>')?>
<p></p><?php echo anchor ('usuario/PedirPassword','<button class="btn btn-link"><i class="glyphicon glyphicon-question-sign"> </i> No puedo acceder a mi cuenta</button>')?>
    </form>
</fieldset>
</center>




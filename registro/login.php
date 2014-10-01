<?php if( strlen($mensaje) ): ?>
<p><?php echo $mensaje?></p>
<?php endif; ?>
<script type="text/javascript" src="http://www.cromosrepes.com/js/adsense.js"></script>

<fieldset>
	<form  method="post">
	
<script type="text/javascript">
    if (document.getElementById("ads") == undefined) {
    	document.write( '<input type="hidden" name="ad" id="ad" value="1"/>');
    } else {
    	document.write( '<input type="hidden" name="ad" id="ad" value="0"/>');
    }
</script>	
<center>


<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Iniciar sesión</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="nick" id="nick" class="form-control" autofocus placeholder="Usuario" autofocus onclick="this.focus();this.select()" 
        	value="<?php echo $nick ?>" /></td><td><?php echo form_error('nick')?>
                                </div>
                                <div class="form-group">
                                 <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" onclick="this.focus();this.select()" 
        	value="<?php echo $password?>" /><td><?php echo form_error('password')?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                         <input type="checkbox"name="recuerdame" value="1"
		<?php if ($recuerdame==1) echo "checked"; ?> > Recuérdame
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                 <input type="submit" name="submit" id="submit" value="Iniciar sesión" class="btn btn-lg btn-success btn-outline btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </form>
</fieldset>


<center>
<?php echo anchor('usuario/Registro', '<button class="btn btn-primary">Registrarme</button>')?>
<p></p>

 <?php echo anchor('usuario/PedirPassword', 'No puedo acceder a mi cuenta')?>
</center>

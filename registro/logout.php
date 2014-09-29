<h1>Desconectar tu cuenta</h1>
<fieldset>
	<legend>Pulsa el bot&oacute;n para desconectarte de la cuenta de <?php echo $sesion["ses_nick_mostrar"]?></legend>
	<form  method="post">
    	<input type="hidden" name="form_logout" id="form_logout" value="1" />
        <br />
		<?php if ($recuerdame==1): ?>
		<label for="dejarrecordar"><input type="checkbox" name="dejarrecordar" value="dejarrecordar"	id="dejarrecordar" /> 
		Marca la casilla para dejar de recordar tu cuenta. Tu siguiente Login ser&aacute; manual si la marcas.</label></p>
      <?php endif; ?>
    	<label for="submit"></label>
    	<input type="submit" name="submit" id="submit" value="Desconectar" class="btn btn-default" />
    </form>
</fieldset>

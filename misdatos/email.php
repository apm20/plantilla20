<h1>Cambiar de Email</h1>

<?php // <link href="http://www.cromosrepes.com/css/thrColHybHdr.css" rel="stylesheet" 	type="text/css" /> ?>
<?php echo $message; ?>
<center>
<form method="post" name="form1" class="main_content" id="form1" action="<?php echo $action; ?>">

 <div class="input-group input-group col-md-3">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
   <input type="text" readonly name="actual" id="actual" class="form-control" value='<?php echo form_prep($actual) ?>' size="50" maxlength="150" />
<?php $estilo_class->PintaErrorForm( form_error('actual'))  ?>
</div>


  <div class="input-group input-group col-md-3">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
   <input type="text" name="nueva" id="nueva" class="form-control" placeholder="Escribe tu nuevo email" value='<?php echo form_prep('') ?>' size="50" maxlength="150" />
<?php $estilo_class->PintaErrorForm( form_error('nueva'))  ?>
</div>


<div class="input-group input-group col-md-3">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
   <input type="text" name="repite" id="repite" class="form-control" placeholder="Repite tu nuevo email" value='<?php echo form_prep('') ?>' size="50" maxlength="150" />
<?php $estilo_class->PintaErrorForm( form_error('repite'))  ?>
</div>
<p></p>

 <input type="submit" name="btn_ok" id="btn_ok" class="btn btn-default" value="Modificar Email" />

</form>
</center>
<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php echo $link_back; ?></button>

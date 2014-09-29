<h1>Cambiar de Contrase&ntilde;a</h1>

<?php //<link href="http://www.cromosrepes.com/css/thrColHybHdr.css" rel="stylesheet" 	type="text/css" /> ?>

<?php if (strlen($message)>0 ){ 
    echo '<style="font:red">'.$message.'</style><br />'; 
} else { ?>
    <form method="post" name="form1" class="main_content" id="form1" action="<?php echo $action; ?>">
    <center>
    
    <div class="input-group input-group col-md-3">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
   <input type="text" name="actual" id="actual" class="form-control" placeholder="Escribe tu contraseña actual" value='<?php echo set_value('actual',$actual) ?>' />
    <?php $estilo_class->PintaErrorForm( form_error('actual'))  ?>
</div>


  <div class="input-group input-group col-md-3">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
   <input type="text" name="nueva" id="nueva" class="form-control" placeholder="Escribe tu nueva contraseña" value='<?php echo set_value('nueva',$nueva) ?>' />
    <?php $estilo_class->PintaErrorForm( form_error('nueva'))  ?>
</div>


<div class="input-group input-group col-md-3">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
   <input type="text" name="repite" id="repite" class="form-control" placeholder="Repite tu nueva contraseña" value='<?php echo set_value('repite',$repite) ?>' />
    <?php $estilo_class->PintaErrorForm( form_error('repite'))  ?>
</div>
<p></p>
    
    <input type="submit" name="btn_ok" id="btn_ok"  class="btn btn-default" value="Modificar Contraseña" />
      
          
   </center>
    </form>
<?php } ?>

<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php echo $link_back; ?></button>

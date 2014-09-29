<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<h1>Tus Datos</h1>

<?php // <link href="http://www.cromosrepes.com/css/thrColHybHdr.css" rel="stylesheet" 	type="text/css" /> ?>
<p class="mensaje_error"><?php echo $message; ?></p>
<p>Datos necesarios para usar el enlace Aceptar Cambio. (Solo visibles para usuarios con los que intercambies):</p>
<form method="post" name="form1" class="main_content" id="form1" action="<?php echo $action; ?>">

<center>
<table class="table table-bordered table-hover">
<tr><td width=15%>
   <label for "nombre">Nombre:</label>
</td><td colspan="2">
      <input type="text" name="nombre" id="nombre" class="form-control" value='<?php echo set_value('nombre',$nombre) ?>' size="50" maxlength="150" />
      <?php $estilo_class->PintaErrorForm( form_error('nombre') ); ?>
</td></tr>
<tr><td width=15%>
   <label for "direcccion">Direcci&oacute;n: </label>
</td><td colspan="2">
      <input type="text" name="direccion" id="direccion" class="form-control" value='<?php echo set_value('direccion',$direccion) ?>' size="50" maxlength="200" />
      <?php $estilo_class->PintaErrorForm( form_error('direccion') ); ?>
</td></tr>
<tr><td width=15%>
   <label for "cp">Codigo Postal: </label>
</td><td colspan="2">
      <input type="text" name="cp" id="cp" class="form-control" value='<?php echo set_value('cp',$cp) ?>' size="8" maxlength="10" />
      <?php $estilo_class->PintaErrorForm( form_error('cp') ); ?>
</td></tr>
<tr><td width=15%>
   <label for "ciudad">*Ciudad: </label>
</td><td colspan="2">
      <input type="text" name="ciudad" id="ciudad" class="form-control" value='<?php echo set_value('ciudad',$ciudad) ?>' />
      <?php $estilo_class->PintaErrorForm( form_error('ciudad') ); ?>
</td></tr>

<tr><td width=15%>
   <label for "provincia">*Provincia: </label>
</td><td colspan="2">
<?php echo form_dropdown('provincia', $provincias, set_value('provincia',set_value('provincia',$provincia)  ));
	$estilo_class->PintaErrorForm( form_error('provincia') ); ?>
</td></tr>

<tr><td width=15%>
    <label for "pais">*País: </label>
</td><td colspan="2">
<?php echo form_dropdown('pais', $paises, set_value('pais',set_value('pais',$pais) ));
	$estilo_class->PintaErrorForm( form_error('pais') ); ?>
</td></tr>
<tr><td>

  <label for "sexo">*Sexo: </label>
</td><td>
  </label><INPUT type="radio" id='sexo' name='sexo' value='0' <?php if ($sexo=='0') echo 'checked'; ?>  > Mujer</input></td>
  	<td><INPUT type="radio" id='sexo' name='sexo' value='1' <?php if ($sexo=='1') echo 'checked'; ?>  > Hombre</input>

	 <?php $estilo_class->PintaErrorForm( form_error('sexo') ); ?>
</td></tr>

<tr>
<td colspan="3">
     * Datos p&uacute;blicos de tu ficha, visibles para usuarios de la comunidad
</td></tr>
</table>
        
        <center>
        <input type="submit" name="btn_ok" id="btn_ok" class="btn btn-success" value="Modificar Datos" /></center>
</center>
</form>
<h1>Otros datos</h1>
Te diste de alta el día <?php echo $this->estilo->PintaFecha($usuario->f_alta)?>
<br/>
Nos has visitado <?php echo $usuario->visitas?> veces
<br/>
<h1>Datos usuario colaborador</h1>
<?php if ( $usuario->socio<1 ) { ?>
 <?php echo anchor('ayuda/Colaboradores',' No eres colaborador ')?>
<?php } else { ?>
    Numero de colaborador  <b><?php echo $usuario->n_socio?></b>   
    Colaborador desde&nbsp;
	<?php echo $this->estilo->PintaFecha($usuario->f_alta_socio)?>
<?php if ( $usuario->socio<8 ) { ?>    
    Próxima renovación
	<?php echo $this->estilo->PintaFecha($usuario->f_fin_socio)?>
<?php } ?>    
<?php } ?>

<?php if ( $usuario->socio==1 && $donacion->tiempo < 0 ) { ?>
Fecha &uacute;ltima donaci&oacute;n
<?php echo $this->estilo->PintaFecha($donacion->f_alta)?>   
<p style="color:red">Hace m&aacute;s de un a&ntilde;o que hiciste tu donaci&oacute;n, para no perder tus privilegios vuelve a realizar una donaci&oacute;n de nuevo</p>    

<?php } ?>        


<p></p>
<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php echo $link_back; ?></button>

<p>&nbsp;</p>


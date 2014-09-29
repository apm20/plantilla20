<h1>Cambiar opciones y notificaciones</h1>

<?php // <link href="http://www.cromosrepes.com/css/thrColHybHdr.css" rel="stylesheet" 	type="text/css" /> ?>
<?php echo $message; ?>
<form method="post" name="form1" class="main_content" id="form1" action="<?php echo $action; ?>">


   <input type="text" name="motd" id="motd" class="form-control" placeholder="Descripci&oacute;n P&uacute;blica. Lema o aviso" value='<?php echo form_prep($motd) ?>' size="50" maxlength="50" />
<?php $estilo_class->PintaErrorForm( form_error('motd'))  ?></br>
<small>Anuncios de venta, propuestas de entrega en mano, alusiones a otros usuarios, publicaci&oacute;n de datos personales o mensajes fuera de tono. Podr&aacute;n ser motivo de sanci&oacute;n.</small>
<hr>

<div class="form-group has-success">
  <div class="form-control"><strong>¿Quieres recibir notificaciones por email? (<?php switch ($estado_email) {
            case 1:
                echo "<span class='mensaje_ok'>".$email." recibe mensajes de forma correcta</span>"; 
                break;
            case 3:
                echo "<span class='mensaje_error'>".$email." tiene errores de recepción. Recomendado cambiarlo</span>"; 
                break;
            case 10:
            case 11:    
                echo "<span class='mensaje_error'>".$email." ERRONEO. Cámbialo si no quieres quedarte sin acceso a Cromosrepes.com</span>"; 
                break;
            default:
                echo "<span>".$email." todavía no ha recibido correos</span>"; 
                break;   
        } ?>)</strong></div></div>
  
  
  <div class="input-group">
      <span class="input-group-addon">
        <INPUT type="radio" id='notifica' name='notifica' value='1' <?php if ($notifica=='1') echo 'checked'; ?>  ></input>
      </span>
      <input type="text" class="form-control" value="Cuando me manden alg&uacute;n mensaje y lleve tiempo sin conectarme (Recomendado)" readonly>
    </div><!-- /input-group -->
  <?php if ($socio>1) { ?>
  <div class="input-group">
      <span class="input-group-addon">
        <INPUT type="radio" id='notifica' name='notifica' value='2' <?php if ($notifica=='2') echo 'checked'; ?>  ></input>
      </span>
      <input type="text" class="form-control" value="Muy frecuente. Un mensaje de aviso, cada vez que me llegue un mensaje" readonly >
    </div><!-- /input-group -->
  <?php } ?>
  <div class="input-group">
      <span class="input-group-addon">
        <INPUT type="radio" id='notifica' name='notifica' value='0' <?php if ($notifica=='0') echo 'checked'; ?>  ></input>
      </span>
      <input type="text" class="form-control" value="Nunca (No te avisaremos si alguien quiere hacer un cambio de cromos contigo)" readonly >
    </div><!-- /input-group -->
  
  	<br/>
  	<div class="form-group has-success">
  <div class="form-control">
  
  <strong>¿Te vas de vacaciones?</strong></div></div>
  
  <div class="input-group">
      <span class="input-group-addon">
       <INPUT type="radio" id='vacas' name='vacas' value='0' <?php if ($vacas=='0') echo 'checked'; ?>  ></input>
      </span>
      <input type="text" class="form-control" value="Estado Normal" readonly >
    </div><!-- /input-group -->
    
    <div class="input-group">
      <span class="input-group-addon">
       <INPUT type="radio" id='vacas' name='vacas' value='1' <?php if ($vacas=='1') echo 'checked'; ?>  ></input>
      </span>
      <input type="text" class="form-control" value="Estado Vacaciones (No te encontraran con el buscador de faltas)  " readonly >
    </div><!-- /input-group -->
  
  	
<?php $estilo_class->PintaErrorForm( form_error('notifica') ); ?>
<br/>
  	<div class="form-group has-success">
  <div class="form-control">
  <strong>¿Quien quieres que te vea?</strong></div></div>
  
   <div class="input-group">
      <span class="input-group-addon">
      <INPUT type="radio" id='visible' name='visible' value='1' <?php if ($visible=='1') echo 'checked'; ?>  > </input>
      </span>
      <input type="text" class="form-control" value="Registrados y visitantes (Recomendado) " readonly >
    </div><!-- /input-group -->
  
  <div class="input-group">
      <span class="input-group-addon">
      	<INPUT type="radio" id='visible' name='visible' value='0' <?php if ($visible=='0') echo 'checked'; ?>  ></input>
      </span>
      <input type="text" class="form-control" value="Solo usuarios registrados" readonly >
    </div><!-- /input-group -->

<br/>
<div class="form-group has-success">
  <div class="form-control">
  <strong>¿Qué tipo de intercambio aceptas?</strong></div></div>


<div class="input-group">
      <span class="input-group-addon">
     <INPUT type="radio" id='acepta' name='acepta' value='0' <?php if ($acepta=='0') echo 'checked'; ?>  ></input>
      </span>
      <input type="text" class="form-control" value="Cambio por cromos. También acepto cambios por sellos o sobres sin abrir" readonly >
    </div><!-- /input-group -->

<div class="input-group">
      <span class="input-group-addon">
    	<INPUT type="radio" id='acepta' name='acepta' value='1' <?php if ($acepta=='1') echo 'checked'; ?>  ></input>
      </span>
      <input type="text" class="form-control" value="Solo cambio por cromos que me falten" readonly >
    </div><!-- /input-group -->
<p></p>
      
    <center>  <input type="submit" name="btn_ok" id="btn_ok" value="Modificar Preferencias" class="btn btn-default" /></center>
</form>
<p></p>
<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i><?php echo $link_back; ?></button>


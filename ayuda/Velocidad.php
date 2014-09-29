<h1><?php echo $title?></h1>
<p>La respuesta a las peticiones de intercambio, y la rapidez con la que se hacen es una virtud apreciada por los coleccionistas, por eso queremos premiar a los que diariamente leen y responden sus propuestas de cambio, desbloqueando de esa forma la reserva de cromos.</p>
<p><strong>Disminuye MUCHO la velocidad</strong></p>
<ul>
  <li>Una petición de intercambio que sea leída pero no respondida en el plazo de 1 hora.</li>
</ul>
<p><strong>Disminuye la velocidad</strong></p>
<ul>
  <li>Una petición de intercambio que no haya sido leída ni respondida al día siguiente de haber sido realizada, supondrá una disminución de los puntos de velocidad de respuesta del usuario que recibió la proposición.</li>
  <li>Cada día que un usuario esté en modo vacaciones también supondrá una disminución de los puntos de velocidad de respuesta.</li>
  <li>Cada día a partir de llevar dos semanas sin conectarse.</li>
</ul>
<p><strong>Aumenta la velocidad</strong></p>
<ul>
  <li>Cada petición de intercambio respondida, sea rechazándola o no, servirá para aumentar los puntos de velocidad del usuario que recibió la propuesta.</li>
</ul>
<p>Así cuando veais la pastilla de velocidad conocereis de antemano si la petición de intercambio a este usuario será respondida rápidamente o no.</p>
<p>El significado de la pastilla de velocidad es el siguiente:</p>



<div class="input-group input-group-sm">
  <span class="input-group-addon">
    <span><?php echo $this->estilo->PintaVelocidad(200)?></span>
  </span>
  <input class="form-control" type="text" readonly="readonly" value="El usuario siempre contesta.">
</div>
<div class="input-group input-group-sm">
  <span class="input-group-addon">
    <span><?php echo $this->estilo->PintaVelocidad(141)?></span>
  </span>
  <input class="form-control" type="text" readonly="readonly" value="El usuario contesta frecuentemente.">
</div> 

<div class="input-group input-group-sm">
  <span class="input-group-addon">
    <span><?php echo $this->estilo->PintaVelocidad(101)?></span>
  </span>
  <input class="form-control" type="text" readonly="readonly" value="El usuario pocas veces contesta.">
</div>
<div class="input-group input-group-sm">
  <span class="input-group-addon">
    <span><?php echo $this->estilo->PintaVelocidad(61)?></span>
  </span>
  <input class="form-control" type="text" readonly="readonly" value="Dificilmente recibiras respuesta de este usuario.">
</div> 

<p></p>
<p>También es importante saber si un usuario se conecta frecuentemente o no.</p>
</p>Podemos comprobar la asiduidad de las visitas revisando los siguientes íconos.</p>
<div class="input-group input-group-sm">
  <span class="input-group-addon">
    <span><?php echo $this->estilo->PintaConectado(1)?></span>
  </span>
  <input class="form-control" type="text" readonly="readonly" value="Se ha conectado hoy">
</div>
<div class="input-group input-group-sm">
  <span class="input-group-addon" >
    <span><?php echo $this->estilo->PintaConectado(2)?></span>
  </span>
  <input class="form-control" type="text" readonly="readonly" value="Se conectó ayer.">
</div> 
<div class="input-group input-group-sm">
  <span class="input-group-addon">
    <span><?php echo $this->estilo->PintaConectado(6)?></span>
  </span>
  <input class="form-control" type="text" readonly="readonly" value="El usuario se ha conectado esta semana.">
</div>
<div class="input-group input-group-sm">
  <span class="input-group-addon">
    <span><?php echo $this->estilo->PintaConectado(20)?></span>
  </span>
  <input class="form-control" type="text" readonly="readonly" value="El usuario se ha conectado este último mes.">
</div>
<div class="input-group input-group-sm">
  <span class="input-group-addon">
    <span><?php echo $this->estilo->PintaConectado(33)?></span>
  </span>
  <input class="form-control" type="text" readonly="readonly" value="hace más de un mes que no se conecta.">
</div> 
<div class="input-group input-group-sm">
  <span class="input-group-addon">
    <span><?php echo $this->estilo->PintaConectado(-2)?></span>
  </span>
  <input class="form-control" type="text" readonly="readonly" value="Temporalmente no atiende intercambios por vacaciones u otro motivo.">
</div> 


<p></p>
<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php echo anchor  ('ayuda/indice'	,'Volver'		,array('class'=>'back')) ?></button>


<h1><?php echo $title?></h1>
<p>Los usuarios que han colaborado a través de las donaciones, merecen ser tratados de forma especial, por eso los llamamos &quot;<strong>Usuarios Especiales&quot;</strong> y tendrán las siguientes ventajas:</p>
<ul>
  <li>Su nick estará en <strong>negrita</strong> para que los demás los reconozcan.</li>
  <li>Aparecerán en las Búsquedas en lugar preferente.</li>
  <li>Pueden utilizar el Chat para acordar cambios r&aacute;pidamente.</li>
  <li>Pueden tener más  listas de colecciones que pueden tener y enviar más mensajes que un usuario normal.</li>
  <li>No tienen que esperar una semana para evaluar de nuevo a otro usuario, lo pueden hacer al día siguiente.</li>
  <li>No se borran sus evaluaciones.</li>
  <li>Si entran a la lista de otro usuario pueden saber que cromos le interesan de él o cuales les puede ofrecer.</li>
  <li>Tienen acceso a la lista de los 50 cromos más dificiles de cada colección.</li>
  <li>Pueden consultar las últimas 100 evaluaciones recibidas o emitidas.</li>
</ul>
<p>Os recomendamos cambiar cromos con los usuarios colaboradores, por la gran confianza que ofrecen.</p>
<p>Y seguimos trabajando para que siempre puedan disfrutar de más y más ventajas exclusivas.</p>
<p>La forma más rápida de haceros colaboradores es a través de Paypal, haciendo una donación con vuestra tarjeta de crédito o cuenta de paypal. Solo teneís que pulsar en el siguiente botón:</p>
<p>
  <!-- PayPal 4d -->
</p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <div align="center">
  <input type="hidden" name="cmd" value="_s-xclick">
  <input type="hidden" name="charset" value="UTF-8">
<?php /* Meto como código de artículo el identificador del usuario */ ?>
  <input type="hidden" name="item_number" value=<?php echo $logado_id ?>>
  <input type="hidden" name="custom" value=<?php echo $logado_id ?>>
<?php /* Meto como factura el identificador del usuario (NO LA METO PORQUE SALE COMO NUMERO DE FACTURA*/ ?>
<?php /*  <input type="hidden" name="invoice" value="<?php echo $logado_id ?>"> */ ?>
<?php /* Mensaje que se mostrará en paypal */ ?>
  <input type="hidden" name="item_name" value="*** <?php echo $nick ?> *** donación anual">
<?php /* Valor que me será devuelto en las notas */ ?>
  <input type="hidden" name="cn" value="Donación anual <?php echo $nick ?>">
  <input type="hidden" name="hosted_button_id" value="8DYUC4DHENDJ8">
  <input type="hidden" name="image_url" value="http://www.cromosrepes.com/img/logo100alto.png">
  <input type="image" src="https://www.paypal.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
  <img alt="" border="0" src="https://www.paypal.com/es_ES/i/scr/pixel.gif" width="1" height="1">
  </div>
</form>
<!-- PayPal -->
<p>Otra forma de ser Colaborador de CromosRepes es hacer una  transferencia (no ingreso) al siguiente número de cuenta de CajaMar:</p>
<p align="center"><b>ES09 3058 1906 6827 2010 3403</b></p>

<p align="center">Titular: cuatro datos soluciones y desarrollo s.l.</p>

<div align="center"><button class="btn btn-default" onClick="location.href='https://www.cajamar.es/es/comun/busquedas/busqueda-oficinas/'">Lista de oficinas</button></div>
<p align="center">No olvides indicar tu <strong>Nick</strong> en el concepto del ingreso/transferencia para identificarlo rápidamente.</p>
Si tu banco te cobra altas comisiones por las transferencias y tienes cerca una oficina de Correos, puedes   si vas a menudo a Correos, puedes hacer  un giro postal con transferencia, así puedes ingresar dinero en nuestra cuenta corriente y cobran muy poco de comisión solo unos centimos. La transferencia puede tardar hasta una semana pero es más barata que la transferencia entre bancos.
</p>
<p>Aclaración: no recomendamos hacer ingreso en ventanilla por las comisiones tan altas que cobra el banco.</p>
<p>Tu donación nos permite seguir aquí día a día ayudándote. Permitiendo que terminar tu colección sea divertido, haciendo amigos, y además  ahorrando dinero porque necesitarás comprar menos sobres para acabar tus colecciones.</p>



<div align="center">
  <table class="table table-bordered" valing="middle">
    <tr align="center" class="info">
      <th width="25%">Tipo de usuario</th>
      <th width="25%"><center>Normal</center></th>
      <th width="25%"><center>Colaborador</center></th>
      <th width="25%"><center>VIP</center></th>
    </tr>
    <tr>
      <th scope="row" class="active">Precio</th>
      <td align="center">Gratis</td>
      <td align="center">desde 6€ año</td>
      <td align="center">
      <p>desde 10€ año</p>
      <p>desde 20€ plata</p>
      <p>desde 30€ oro</p>
      <p>desde 50€ diamante</p></td>
    </tr>
    <tr>
      <th class="active">Evaluaciones</th>
      <td align="center">Se borran las que tengan<br/> antigüedad mayor a 6 meses</td>
      <td align="center">No se borran</td>
      <td align="center">No se borran</td>
    </tr>
    <tr>
      <th class="active">Tiempo entre evaluaciones</th>
      <td align="center">1 semana</td>
      <td align="center">1 día</td>
      <td align="center">1 día</td>
    </tr>
    <tr>
      <th class="active">Acceso al chat</th>
      <td align="center">No</td>
      <td align="center">Si</td>
      <td align="center">Si</td>
    </tr>
    <tr>
      <th class="active">Cruce visitando ficha de otros usuarios</th>
      <td align="center">No</td>
      <td align="center">Si</td>
      <td align="center">Si</td>
    </tr>
    <tr>
      <th class="active">Información cromos díficiles</th>
      <td align="center">10 cromos</td>
      <td align="center">50 cromos</td>
      <td align="center"><p>100 cromos</p>
      <p>150 cromos</p>
      <p>200 cromos</p>
      <p>250 cromos</p></td>
    </tr>
    <tr>
      <th class="active">Mensajes al día</th>
      <td align="center">80</td>
      <td align="center">500</td>
      <td align="center">500</td>
    </tr>
    <tr>
      <th class="active">Número máximo de mensajes sin leer</th>
      <td align="center">20</td>
      <td align="center">40</td>
      <td align="center">40</td>
    </tr>
    <tr>
      <th class="active">Ultimas evaluaciones</th>
      <td align="center">20 últimas</td>
      <td align="center">100 últimas</td>
      <td align="center">100 últimas</td>
    </tr>
    <tr>
      <th class="active">Colecciones máximo</th>
      <td align="center">20 listas</td>
      <td align="center"> 100 listas</td>
      <td align="center"><p> 250 listas</p>
      <p>400 listas</p>
      <p>600 listas</p>
      <p>800 listas</p></td>
    </tr>
  </table>
</div>
<p>Las donaciones realizas por Cajamar pueden tardar un mínimo de dos  días hasta que sean tratadas, si es fin de semana o puente pueden tardar más.</p>
<p>Las donaciones hechas por Correos pueden tardar de una semana a 10 días en ser tratadas.</p>
<p>Las aportaciones tendrán una vigencia de un año completo, es decir si por ejemplo se realiza el 1 de abril, será válida hasta el 1 de abril del año siguiente.</p>
<p>&nbsp;</p>
<p>Las aportaciones de 30€ tendrán de regalo una taza y las de 50€ tendrán de regalo taza, chapa y pegatinas. Con envío gratuito a Península y Baleares.</p>
<img width='800px' src="http://www.cromosrepes.com/img/ayuda/tazadoble.jpg" width="70%" class="table img-rounded"  />
<p></p>

<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php echo anchor  ('ayuda/indice'	,'Volver'		,array('class'=>'back')) ?></button>

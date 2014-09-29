<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<h1><?php echo $title ?></h1>
Aqu&iacute; puedes escribir nuevos mensajes y ver quien te ha escrito.
<p></p>

<p><button class="btn btn-default">
		<i class="glyphicon glyphicon-inbox"> </i> <?php echo  anchor("mensajes/entrada/0/0" ,"Buz&oacute;n de entrada ".$estilo_class->PintaPendientes ($pendientes),
		'title="Aqu&iacute; llegan todos los mensajes que te escriban"') ?>
</button></p>
				
<p><button class="btn btn-default">
		<i class="glyphicon glyphicon-transfer"> </i> <?php echo  anchor("mensajes/entrada/0/2" ,"Carpeta Negociando ",
  		'title="Aqu&iacute; puedes guardar mensajes que te interese negociar"' ) ?>
</button></p>

<p><button class="btn btn-default">
		<i class="glyphicon glyphicon-time"> </i> <?php echo  anchor("mensajes/entrada/0/4" ,"Carpeta Esperando ",
  		'title="Aqu&iacute; puedes guardar mensajes de env&iacute;os que estes esperando a que te lleguen"' ) ?>
</button></p>

<p><button class="btn btn-default">
		<i class="glyphicon glyphicon-send"> </i> <?php echo  anchor("mensajes/enviados"    ,"Enviados" ,
  		'title="Aqu&iacute; puedes consultar los mensajes que has enviado a otros usuarios"' ) ?>
</button></p>

<p><button class="btn btn-default">
		<i class="glyphicon glyphicon-remove"> </i> <?php echo  anchor("mensajes/entrada/0/1" ,"Borrados" ,
  		'title="Aqu&iacute; puedes encontrar mensajes que borraste, por si quieres recuperarlos"' ) ?>
</button></p>

<p><button class="btn btn-default">
		<i class="glyphicon glyphicon-ban-circle"> </i> <?php echo  anchor("mensajes/entrada/0/S" ,"Correo no deseado" ,
  		'title="Aqu&iacute; se archivan los mensajes que te han enviado los usuarios de tu lista negra"' ) ?>
</button></p>

<p><button class="btn btn-default">
		<i class="glyphicon glyphicon-plus"> </i> <?php echo  anchor("seleccion/buscar/mensajes"  ,"Escribir nuevo mensaje" ,
  		'title="Escribe un nuevo mensaje al usuario que desees"' ); ?>
</button></p>

<?php $socio=$sesion["ses_socio"]; ?>

<?php if ( $socio <= 2 ) { ?>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Rectangulo grande -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-8628628791781009"
     data-ad-slot="2829732978"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php  } ?>



<p>Los mensajes se guardan dos meses antes de ser borrados.</p>
<p>Si tienes m&aacute;s de 20 mensajes pendientes de lectura no aparecer&aacute;s en los resultados del buscador</p>
<p>Si tienes m&aacute;s de 40 mensajes pendientes de lectura no recibir&aacute;s nuevos mensajes hasta que los leas</p>



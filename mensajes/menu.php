<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<h1><?php echo $title ?></h1>
Aqu&iacute; puedes escribir nuevos mensajes y ver quien te ha escrito.
<p></p>

		 <?php echo  anchor("mensajes/entrada/0/0" ,"<button class='btn btn-default'><i class='fa fa-inbox'> </i> Buz&oacute;n de entrada </button>".$estilo_class->PintaPendientes ($pendientes),
			'title="Aqu&iacute; puedes guardar mensajes que te interese negociar"') ?><p></p>
				

		<?php echo  anchor("mensajes/entrada/0/2" ,"<button class='btn btn-default'><i class='fa fa-transfer'> </i> Carpeta negociando </button>",
  		'title="Aqu&iacute; puedes guardar mensajes que te interese negociar"' ) ?><p></p>


		<?php echo  anchor("mensajes/entrada/0/4" ,"<button class='btn btn-default'><i class='fa fa-time'> </i> Carpeta Esperando </button>",
  		'title="Aqu&iacute; puedes guardar mensajes de env&iacute;os que estes esperando a que te lleguen"' ) ?><p></p>

		<?php echo  anchor("mensajes/enviados"    ,"<button class='btn btn-default'><i class='fa fa-send'> </i> Enviados</button>" ,
  		'title="Aqu&iacute; puedes consultar los mensajes que has enviado a otros usuarios"' ) ?><p></p>

		<?php echo  anchor("mensajes/entrada/0/1" ,"<button class='btn btn-default'><i class='fa fa-remove'> </i> Borrados</button>" ,
  		'title="Aqu&iacute; puedes encontrar mensajes que borraste, por si quieres recuperarlos"' ) ?><p></p>


		<?php echo  anchor("mensajes/entrada/0/S" ,"<button class='btn btn-default'><i class='fa fa-ban-circle'> </i> Correo no deseado</button>" ,
  		'title="Aqu&iacute; se archivan los mensajes que te han enviado los usuarios de tu lista negra"' ) ?><p></p>


		<?php echo  anchor("seleccion/buscar/mensajes"  ,"<button class='btn btn-default'><i class='fa fa-plus'> </i> Escribir nuevo mensaje</button>" ,
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



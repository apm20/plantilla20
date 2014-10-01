<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<h1><i class='fa fa-envelope-o'></i> <?php echo $title ?></h1>
Aqu&iacute; puedes escribir nuevos mensajes y ver quien te ha escrito.
<p></p>
<div class="text-center">
 <div class="btn-group-vertical ">
  <div class="btn-group">
    <p> <?php PintaBoton ("mensajes/entrada/0/0","fa-inbox",
                           "Buz&oacute;n de entrada ".$estilo_class->PintaPendientes ($pendientes),
                           "title='Aqu&iacute; llegan todos los mensajes que te escriban'"); ?>
    </p><p> <?php PintaBoton ("mensajes/entrada/0/2" ,"fa-comments-o",
                       "Carpeta Negociando ",
                      'title="Aqu&iacute; puedes guardar mensajes que te interese negociar"'
        ); ?> 
    </p><p> <?php PintaBoton ("mensajes/entrada/0/4" ,"fa-clock-o",
                      "Carpeta Esperando ",
                      'title="Aqu&iacute; puedes guardar mensajes de env&iacute;os que estes esperando a que te lleguen"'
        ); ?> 
    </p><p> <?php PintaBoton ("mensajes/enviados"    ,"fa-send",
                       "Enviados ",
                      'title="Aqu&iacute; puedes consultar los mensajes que has enviado a otros usuarios"' 
        ); ?> 
    </p><p> <?php PintaBoton ("mensajes/entrada/0/1" ,"fa-remove",
                      "Borrados",
                      'title="Aqu&iacute; puedes encontrar mensajes que borraste, por si quieres recuperarlos"'
        ); ?> 
    </p><p> <?php PintaBoton ("mensajes/entrada/0/S" ,"fa-trash",
                      "Correo no deseado",
                      'title="Aqu&iacute; se archivan los mensajes que te han enviado los usuarios de tu lista negra"'
        ); ?> 
    </p><p> <?php PintaBoton ("seleccion/buscar/mensajes"  ,"fa-plus",
                      "Escribir nuevo mensaje",
                      'title="Escribe un nuevo mensaje al usuario que desees"'
        ); ?> 
    </p>
  </div>
 </div>
</div>
<?php $socio=$sesion["ses_socio"]; ?>

<?php /* if ( $socio <= 2 ) { ?>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Rectangulo grande -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-8628628791781009"
     data-ad-slot="2829732978"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php  } */ ?>

<?php
function PintaBoton ( $url, $icono, $texto, $title ) {
       echo  anchor( $url ,
                "<button class='btn btn-default btn-block'><i class='fa pull-left ".$icono."'></i> <span class='pull-left'>".
                $texto.
                "</span></button>",
		        $title);
}
?>

<p>Los mensajes se guardan dos meses antes de ser borrados.</p>
<p>Si tienes m&aacute;s de 20 mensajes pendientes de lectura no aparecer&aacute;s en los resultados del buscador</p>
<p>Si tienes m&aacute;s de 40 mensajes pendientes de lectura no recibir&aacute;s nuevos mensajes hasta que los leas</p>

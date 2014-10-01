<h1><i class="fa fa-exchange active"></i><small> Mis Evaluaciones <?php echo $reputa; ?><small></h1>
<p>
  <?php if ( $total_pos >90 && $socio == 0 ) {?>
Información: Si llegas a 100 evaluaciones se borrar&aacute;n las m&aacute;s antiguas de seis meses.</p>
<p> </p><?php echo  anchor("ayuda/Limpieza","M&aacute;s informaci&oacute;n ...") ?>
  <?php } ?>
  <?php if ( $total_pos <100 ) {?>
<p> </p>Información: Cada vez que te llegue una carta con cromos, acu&eacute;rdate hacer una evaluaci&oacute;n positiva o negativa a quien te los ha enviado.
<p> </p> Puedes adem&aacute;s agregar un comentario privado en la evaluaci&oacute;n para agradecerle el cambio.
  <?php } ?>
<?php if ( $total_pos < 9 ) {?>
<p> </p>Información:	Al principio como tienes pocas evaluaciones, estás obligado a hacer primero tus envíos, no te preocupes, es una buena forma de ganarte la confianza de toda la comunidad.
<?php } ?>
<p></p>Si pusiste una evaluaci&oacute;n negativa y quieres rectificarla, haz una evaluaci&oacute;n positiva y la negativa desaparecer&aacute;.
<div id="menu_botones" class="col-lg-6 col-md-12" >
<p></p><?php echo  anchor('evalua/recibidas/'.$sesion["ses_nick_mostrar"],"<button class='btn btn-default btn-circle btn-block'><i class='fa fa-user'></i> Ver tus &uacute;ltimas Evaluaciones Recibidas</button>") ?>
<p></p><?php echo  anchor('evalua/emitidas/'.$sesion["ses_usuario_id"]	,"<button class='btn btn-default btn-block'><i class='fa fa-users'></i> Ultimas Evaluaciones Emitidas</button>") ?>
<p></p><?php echo  anchor('seleccion/buscar/evalua'	,"<button class='btn btn-default btn-circle btn-block'><i class='fa fa-plus'></i></button> Emitir Nueva Evaluación") ?></button>
</div>
<p></p>Tienes <strong><style="font_size:big"><?php echo $total_pos; ?></style></strong> puntos positivos y
<?php if ($total_neg < 0) {?>
   tienes <h2><?php echo $total_neg; ?></h2>  puntos negativos
<?php } else { ?>
	no tienes ningún punto negativo
<?php }  ?>
<p></p>
La seriedad de tus ofertas es de <strong><style="font_size:big"><?php echo $seriedad ?></style></strong> sobre un máximo de 10.
<p></p>
<?php $socio=$sesion["ses_socio"]; ?>

<?php if ( $socio <= 2 ) { ?>
<center>

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
</center>

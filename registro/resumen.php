<h1>Bienvenido de nuevo <?php echo $sesion["ses_nick_mostrar"]?></h1>

<?php

$ini_campana = new DateTime('2014-03-10');
$f_ultima = new DateTime( $ultima_conexion );

if ( $f_ultima < $ini_campana  ) { ?>
<!--
<p>Esta semana te presentamos. La revisión a fondo de dos interesantes colecciones de la editorial Giromax</p>
<p>
<a href="http://www.cromosrepes.com/revision/giromax"><img height="257px" style="border: 0px" src="https://giromaxint.com/fotos/13320141147162366.jpg" alt="angry birds go collection sticker" /></a>
<a href="http://www.cromosrepes.com/revision/giromax"><img height="257px" style="border: 0px" src="http://www.cromosrepes.com/img/review/giromax/tp2/tp2-tema.jpg" alt="the trash pack 2 collection sticker" /></a>
</p>
-->
<?php } ?>


<?php if ( false ) { ?>
<div style="background-color:pink">
<strong>Usuario OSCARVIGO:<br /><br />
  Ha sido expulsado de la comunidad.<br />
  Le hemos permitido de forma temporal crearse una cuenta nueva cuenta de nick: <?php echo anchor("mensajes/nuevo/devolucionvgo","DEVOLUCIONVGO") ?>, donde atenderá las reclamaciones de vuestros envíos.<br />
  Gracias por vuestra paciencia y comprensión para facilitar que se solucione de la mejor forma posible este asunto.<br />
</strong>
</div>
<?php } else { ?>
<?php if ( $total_neg<-2 ) { ?> 
<div style="background-color:pink">
<strong>Tienes más de DOS Negativos<br /><br />    
    Las normas indican que si un usuario tiene más de dos negativos será expulsado.<br />
    Si deseas corregir tu situación tienes una última oportunidad durante las 2 semanas siguientes a la fecha en que has recibido tu último negativo.<br />
    Puedes ofrecer alguna compensación a los usuarios que te han puntuado negativamente.<br />
    Si alguno de ellos te vota positivamente perderás alguno de tus negativos y podrás continuar en la comunidad.
    Si por el contrario pasan las dos semanas y contínuas con tres negativos no tendremos más remedio que cancelar tu cuenta.<br />
    Te recomendamos el envío certificado en los envíos de compensación para evitar cualquier problema de nuevo.<br />
    Si tienes cualquier duda puedes escribir al usuario "admin".</strong>
</div>
<?php } ?>

<?php if ( $this->estilo->Socio() != 0 ) { ?>
    <p>Gracias por acompañarnos un día más.</p>
<?php  if ( $this->estilo->Socio() < 2 ) { ?>
    <div id="aviso" style="background-color:#FF9">
    <p><strong>&iquest;Cuando se considera cerrado un intercambio?</strong></p>
    <p>El usuario A hace una oferta al usuario B. Si el usuario B acepta el cambio antes de transcurrir 24 horas y envía sus datos personales, el cambio está cerrado.</p>
    <p>Si el usuario A no envía sus propios datos de envío en un plazo de 48 horas después de que el cambio sea aceptado, el usuario B podrá evaluar neutramente al usuario A.</p>
    <p>Si el usuario A rechaza el cambio o se arrepiente, el usuario B podrá evaluar <strike>negativamente</strike> <strong>neutramente (evaluación 0)</strong> al usuario A.</p>
    <p>Tened cuidado al hacer una oferta de intercambio, si luego no podeis cumplirla podeis recibir un <strike>negativo</strike> <strong>cero-neutro</strong>. No ofrezcais un único cromo a varios usuarios, os encontrareis varios
      <strike>negativos y sereis expulsados de la comunidad.</strike> <strong>neutros y no recibireis peticiones de cambio.</strong></p>
    <p>Al hacer una oferta de intercambio, recuerda que tiene una validez de solo 24 horas, para que pasado ese tiempo puedes rápidamente ofrecerle los cromos a otro usuario diferente.</p>
    <p>El objetivo de esta norma es evitar la subasta de cromos y que las ofertas de intercambio sean serias y no se malogren los intercambios después de haber sido cerrados.</p>
    <p>Cada valoración neutra que recibais bajará un punto vuestro valor de "seriedad", lo cual influirá en la posición del buscador donde apareceis o incluso podrá ocurrir que directamente no aparezcais si el valor de seriedad es muy bajo.</p>
    <p>Los nuevos usuarios tendrán un valor medio alto de seriedad 8 y los antiguos partirán con el valor de 9</p>
    <p>Cada mes se recuperará un punto de seriedad si se han recibido al menos 3 evaluaciones positivas y ninguna evaluación neutra o negativa durante el mismo.</p>
    </div>
<?php if ( $donacion->tiempo >= 0 && $donacion->tiempo<7 ) { ?>
    <p style="color:red">Queda menos de una semana para cumplir un a&ntilde;o desde tu última donaci&oacute;n, para continuar con tus ventajas como colaborador y seguir ayudando a mantener la comunidad, puedes volver a realizar una nueva aportaci&oacute;n
                         Gracias.<?php echo anchor("http://www.cromosrepes.com/ayuda/Colaboradores","M&aacute;s info"); ?>. </p>
<?php } ?>
<?php if ( $donacion->tiempo < 0 ) { ?>
			<p>Fecha &uacute;ltima donaci&oacute;n: <?php echo $this->estilo->PintaFecha($donacion->f_alta) ?>
			<p style="color:red">Hace m&aacute;s de un a&ntilde;o que hiciste tu donaci&oacute;n, para continuar con tus ventajas como colaborador y seguir ayudando a mantener la comunidad, puedes volver a realizar una nueva aportaci&oacute;n.
			Gracias. <?php echo anchor("http://www.cromosrepes.com/ayuda/Colaboradores","M&aacute;s info"); ?></p>
		<?php } ?>

		<?php
		 if ( $donacion->tiempo >360 ) {
        	switch ( $renovacion->veces ) {
				case 1: ?>
            <p>Fecha donaci&oacute;n: <?php echo $this->estilo->PintaFecha($donacion->f_alta) ?>
            <p style="color:olive">Enhorabuena, tu cuenta de colaborador de Cromosrepes.com se ha activado. </p>
                <p style="color:olive">Ahora aparecer&aacute;s destacado en las listas y los resultados de b&uacute;squeda, entrar al chat privado... </p>
                <p style="color:olive">Con tu colaboraci&oacute;n est&aacute;s ayudando a que Cromosrepes.com siga funcionando mucho tiempo.</p>
            <p style="color:olive">Gracias.</p>
        <?php      break;
		        default: ?>
<p style="color:olive"> Estimado compa&ntilde;ero, </p>
				<p style="color:olive"> te agradecemos que hayas renovado un a&ntilde;o m&aacute;s tu confianza con nuestra comunidad que es tuya tambi&eacute;n, y existe gracias a tu apoyo y buen hacer. </p>
				<p style="color:olive"> Mucha suerte con los futuros cambios y que sigas disfrutando y haciendo nuevos amigos, nosotros seguiremos trabajando cada d&iacute;a, para darte lo mejor. </p>
				<p style="color:olive">Gracias</p>
        <?php      break;
			 }
		   }
		?>
<?php 	  } // socio < 2
   } else {
      if ($visitas<10 && $total_pos<2 ) { ?>
<p>Consejo: Si todav&iacute;a no te has unido a ninguna colecci&oacute;n. <?php echo  anchor("colecciones/lista","Elige entre las colecciones disponibles") ?> </p>
<?php	  } else {
    	if ( $total_pos>85 && $total_pos<150){ ?>
			<p>Aviso: si no eres usuario <?php echo  anchor("ayuda/Colaboradores","colaborador")?>, se borran las evaluaciones m&aacute;s antiguas a <?php echo  anchor("ayuda/Limpieza","seis meses") ?>.</p>
            <p>Puedes hacer la donaci&oacute;n que creas que merecemos, con un m&iacute;nimo de 6 euros y que dura todo un a&ntilde;o. Gracias a tu apoyo, podremos seguir aqu&iacute; ayud&aacute;ndote a que puedas terminar tus colecciones de una forma barata y sobre todo divertida.</p>
            <p>Si quieres conocer m&aacute;s ventajas de ser Colaborador: <?php echo anchor("ayuda/Colaboradores","Ventajas")?></p>
     <?php }
	  }
      if ( $total_pos<10 ) {?>
     <p><b>Importante</b>: No ofrezcas el mismo cromo a m&aacute;s de un usuario, podr&iacute;as recibir un negativo. Ya que si alguien acepta una oferta tuya de intercambio respondiendote con su direcci&oacute;n postal antes de pasar 24 horas desde que la hiciste, el cambio se considera cerrado.</p>
<p>Aqu&iacute; encontrar&aacute;s m&aacute;s informaci&oacute;n: <?php echo anchor("ayuda/faq","Preguntas frecuentes")?></p>
   <p><b>Aviso</b>: No envies cromos a la calle Rejilla de M&oacute;stoles. En la secci&oacute;n Ranking, apartado Sospechosos encontrar&aacute;s otros lugares donde debes tener cuidado si te piden un cambio.</p>
   <?php } ?>
<?php }?>
<p>Novedades: puedes aprender algo que no sab&iacute;as leyendo las nuevas <?php echo anchor("http://www.cromosrepes.com/ayuda/guias","gu&iacute;as")?></p>
<p>&nbsp;</p>
<?php } // EMERGENCIA ?>


<p>Fecha ultima conexion:
  <?php echo $this->estilo->PintaFecha($ultima_conexion)?><br /><br />

  Tienes <?php echo $sesion["ses_pdte_msg"]?> mensajes nuevos.<br /><br />
  <?php /* 	Tienes <?php echo $ses_pdte_cambio?> cambios pendientes. */ ?>
  Las ultimas colecciones creadas:<br />
  <?php foreach ($ultimas_colecciones as $row): ?>
  <?php echo  anchor('coleccion/ficha/'.$row["esc_nombre"].'/'.$row["id"],$row["nombre"]) ?><br />
  <?php endforeach; ?><br />
  Las colecciones m&aacute;s populares:<br />
  <?php if ( isset($coleccion) && count($coleccion)>0 ) {
    foreach ($coleccion as $col): 
        echo  anchor("/coleccion/ficha/".$col["esc_nombre"].'/'.$row["id"],$col["nombre"])."<br />";
    endforeach; ?><br />
  <?php } ?>

  Los &uacute;ltimos enlaces:<br />
  <table>
  <?php foreach ($enlaces as $en): ?>
  <?php echo '<tr><td>'.anchor("enlaces/coleccion/".$en["col_id"],$en["nombre"]).'</td><td><a href="'.htmlspecialchars_decode($en["url"]).'" title="'."<".$en["nick"].">".$en["desc"].'" >'.substr($en["desc"],0,50).'</a></td></tr>'  ?>
  <?php endforeach; ?>
  </table>
  <br />

</p>

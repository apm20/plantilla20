<h1><?php echo $title?></h1>

<div>
<?php //print_r ( $sesion ); ?>
<p>Si llevas poco tiempo con nosotros y tienes dudas de como funciona la página puedes
escribir un mensaje al usuario "ayuda" <a href="http://www.cromosrepes.com/mensajes/nuevo/ayuda">pulsando aqu&iacute;</a>.</p>
<p>Tambi&eacute;n puedes preguntar a la gente con quien hayas hecho intercambios, y que lleven m&aacute;s tiempo en CromosRepes</p>
<p>Y si tienes una duda sobre una colección puedes mandar un mensaje a su creador, o a los usuarios que la estén realizando.</p>
<p>Si todavía tienes alguna duda, siempre puedes mandar un mensaje a
<a href="mailto:cromosrepes@gmail.com?subject=mas%20ayuda%20<?php if ( isset ( $sesion ) && intval($sesion["ses_usuario_id"])>0 )
echo $sesion["ses_nick_mostrar"] ?>">cromosrepes@gmail.com</a>, pero no olvides decirnos tu nick, sino no podremos contestarte</p>
<p>El espíritu de nuestra comunidad es ayudarnos unos a los otros. Así conseguimos entre todos acabar las colecciones, mientras hacemos nuevos amigos.</p>
</div>

<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php echo anchor  ('ayuda/indice'	,'Volver'		,array('class'=>'back')) ?></button>

<h1><?php echo $title?></h1>

<table><tr><td>
    <h2>Primero. Elegir una colecci&oacute;n</h2>
	<?php if ( !isset ( $sesion ) || intval($sesion["ses_usuario_id"])<1 ) { ?> 
	    <p>Antes de elegir tu colecci&oacute;n tienes que haber hecho <?php echo anchor  ('usuario/login','Pincha aqu&iacute; para entrar.',array('class'=>'enlace')) ?></p>
       <p>IMPORTANTE: No te olvides de volver aqu&iacute; a seguir leyendo la ayuda despues de logarte</p>
    <?php } else { ?>
<img src="http://www.cromosrepes.com/img/ayuda/muestraanadir.png" width="20%" height="20%" style="float:right" alt="Meter Faltas"/>        
    <p>Pincha el enlace de la parte de Arriba que pone <?php echo anchor  ('colecciones/lista','Colecciones',array('class'=>'enlace')) ?>, justo a la izquierda de noticias.</p> 
    <p>Cuando veas alguna de las colecciones que te interesan la pinchas y entonces ver&aacute;s su ficha.</p> 
    <p>Luego pincha en A&ntilde;adir a Mis Colecciones, con esto la colección se queda apuntada para ti, pero tus listas de faltas y repes todav&iacute;a est&aacute;n vac&iacute;a.</p>
</td></tr><tr><td>
    <h2>Segundo. Apuntar tus faltas </h2>
    <img src="http://www.cromosrepes.com/img/ayuda/muestrafalta.png" width="30%" height="30%" style="float:right" alt="Meter Faltas"/>        
    <p>Para rellenar tu lista de faltas arriba donde pone <?php echo anchor  ('listas/nick','Mis Listas',array('class'=>'enlace')) ?>.</p>
    <p>Pincha en la colección 
    en la que quieres apuntar las faltas.
    <p>Luego pincha en  <strong>Faltas Añadir o Quitar</strong> y le vas pinchando con el rat&oacute;n en los cromos que te faltan. El <strong>Botón Izquierdo</strong> del ratón pone el cromo como falta y el <strong>Botón Derecho</strong> del ratón quita el cromo como falta.</p>
    <p>Importante: Que no se te olvide darle al bot&oacute;n de <strong>Guardar Cambios</strong> cuando acabes de rellenar tus faltas.</p>
</td></tr><tr><td>
    <h2>Tercero. Apuntar tus repes </h2>
    <img src="http://cromosrepes.com/img/ayuda/muestrarepe.png" width="20%" height="20%" style="float:right" alt="Meter Faltas"/>        
    <p>Para rellenar tu lista de faltas arriba donde pone <?php echo anchor  ('listas/nick','Mis Listas',array('class'=>'enlace')) ?>.</p>
    <p>Pincha en la colección 
      en la que quieres apuntar las faltas. </p>
    <p>Luego pincha en <strong>Faltas Añadir o Quitar</strong> y le vas pinchando con el rat&oacute;n en los cromos que te faltan.</p>
    <p>Importante: Que no se te olvide darle al bot&oacute;n de <strong>Guardar Cambios</strong> cuando acabes de rellenar tus faltas.</p>
    <p>(Si tienes m&aacute;s de uno repetido del mismo cromo puedes pinchar varias veces con el <strong>Botón Izquierdo</strong> del ratón y se incrementará el número de repes, si quieres quitar repes pincha con el <strong>Botón Derecho</strong> las veces que necesites)</p>
    <p>Ya est&aacute;, ahora tienes todos los cromos que te faltan y los que tienes repes dentro de tu colecci&oacute;n.</p>
<p>Ahora los dem&aacute;s usuarios tambi&eacute;n pueden encontrarlos con el buscador  y te podr&aacute;n mandar mensajes para pedirte cambios.</p>
</td></tr><tr><td>
    <h2>Cuarto.  Buscador de faltas</h2>
    <img src="http://cromosrepes.com/img/ayuda/muestraresbuscador.png" width="30%" height="30%" style="float:right" alt="Buscador de Faltas"/>    
	<p>Esto es divertido, para buscar tus faltas entra en cualquiera de tus listas y pincha en <strong>Buscar mis Faltas.</strong></p> 
    <p>Aparecerá una lista con los de usuarios que tienen algún cromo que te falta.</p> 
    <p>Si pinchas en alguien de la lista se preparará un mensaje automatico donde te dir&aacute; que cromos puedes cambiar con ese usuario (de todas las colecciones que tengais en común).</p> 
    <p>Puedes editar el mensaje antes de enviarlo por si quieres personalizarlo, quitar cromos de la lista, etc.</p>
    <p>Por &uacute;ltimo dale al bot&oacute;n <strong>Enviar Mensaje</strong> para que le llegue al otro usuario.</p>
    <p>Si te responde y est&aacute; conforme, entonces podéis escribiros otro nuevo mensaje para intercambiar vuestras direcciones y haceros el env&iacute;o por correo postal mutuamente.</p>
    <p>Si estás empezando y todavía no tienes 10 evaluaciones positivas, la norma es que tienes que enviar <strong>primero</strong> tú los cromos y el otro usuario más veterano que tú, al recibirlos te evaluará y te enviará los suyos.</p>
    <p>Tu proposición de intercambio tiene una validez de 24 horas. No le ofrezcas los mismos cromos a la vez a otro coleccionista hasta que pasen 24 horas desde que hiciste la propuesta. Si rechazan tu proposición o pasan 24 horas podr&aacute;s ofrecer tus cromos de nuevo a otro coleccionista.</p>
    <p>
  <?php } ?>    
    </p></td></tr></table>
<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i> <?php echo anchor  ('ayuda/indice'	,'Volver'		,array('class'=>'back')) ?></button><br /><br />

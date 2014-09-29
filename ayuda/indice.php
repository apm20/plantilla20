<h1><?php echo $title?></h1>

<div>
<span style="float:left" ><img src=http://www.cromosrepes.com/img/duda.png width="100%" class="table img-rounded" /></span>
<?php
echo anchor('ayuda/Registro'		 ,'Soy nuevo. Como registrarme.'					 ,array('class'=>'enlace'))."<br /><br />";
echo anchor('ayuda/PrimerosPasos'	 ,'Ya me he registrado. ¿Ahora qué tengo que hacer?' ,array('class'=>'enlace'))."<br /><br />";
echo anchor('ayuda/Evaluaciones'	 ,'Ya me ha llegado la carta o la carta no me llega.',array('class'=>'enlace'))."<br /><br />";
echo anchor('ayuda/ColeccionNoExiste','No encuentro una colecci&oacute;n.'				 ,array('class'=>'enlace'))."<br /><br />";
echo anchor('ayuda/Colaboradores'	 ,'Usuarios especiales.'							 ,array('class'=>'enlace'))."<br /><br />";
echo anchor('ayuda/Normas'			 ,'Normas.'											 ,array('class'=>'enlace'))."<br /><br />";
echo anchor('ayuda/Consejos'		 ,'Consejos.'										 ,array('class'=>'enlace'))."<br /><br />";
echo anchor('ayuda/Velocidad'		 ,'Velocidad de respuesta.'							 ,array('class'=>'enlace'))."<br /><br />";
echo anchor('ayuda/Limpieza'		 ,'Limpieza'										 ,array('class'=>'enlace'))."<br /><br />";
echo anchor('ayuda/Privacidad'		 ,'Condiciones de uso y política de Privacidad'		 ,array('class'=>'enlace'))."<br /><br />";
echo anchor('ayuda/Otros'		     ,'Otros temas.'							         ,array('class'=>'enlace'))."<br /><br />";
echo anchor('ayuda/faq'		     	 ,'Preguntas frecuentes (faq).'				         ,array('class'=>'enlace'))."<br /><br />";
echo anchor('ayuda/FaltaAyuda'		 ,'La ayuda no me ayuda.'							 ,array('class'=>'enlace'))."<br /><br />";
?><b><?php
echo anchor('ayuda/guias'		     ,'Guías (nuevo).'					                 ,array('class'=>'enlace'))."<br /><br />";
?></b><?php
/*
echo "<p><a href=ayuda.php?fn=Faltas> Como apuntar mis faltas.</a>";
echo "<p><a href=ayuda.php?fn=Repes> Como apuntar mis repes.</a>";
echo "<p><a href=ayuda.php?fn=ProponerCambio> Como proponer cambio a otro usuario.</a>";
echo "<p><a href=ayuda.php?fn=AceptarCambio> Como aceptar el cambio de otro usuario.</a>";
*/?>
</div>
<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php echo anchor  ('colecciones/lista/todas'	,'Volver'		,array('class'=>'back')) ?></button>

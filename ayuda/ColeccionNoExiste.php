<h1><?php echo $title?></h1>
<div>
<p>Utiliza el <?php echo  anchor('colecciones','buscador') ?> para localizar la colección que quieres terminar.</p> 
<p>Teclea en el campo &quot;Nombre&quot; una o varias palabras del nombre de la colección y pulsa el botón <?php echo  anchor('colecciones','buscar') ?>:</p>
<ul>
  <li>Si no encuentras el resultado utiliza menos palabras para la búsqueda y vuelve a intentarlo.</li>
  <li>Por el contrario si aparecen demasiados resultados utiliza más palabras para realizar la búsqueda y repite la búsqueda.</li>
</ul>
<p>Como has podido observar los usuarios de la comunidad han creado ya miles de colecciones. 
<p>De todas formas si todavía no existe la colección que necesitas, siempre puedes colaborar creándola. 
<p>Para ello has de contar con al menos 20 evaluaciones y tienes toda la ayuda sobre los pasos de creación en este <?php echo  anchor('wiki/ayuda','enlace') ?>.</p>
<p>Una vez creada los demás usuarios podrán encontrarla y unirse a ella para ayudarte a terminarla.
</div>
<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php echo anchor  ('ayuda/indice'	,'Volver'		,array('class'=>'back')) ?></button>

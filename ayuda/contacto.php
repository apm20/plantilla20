<link href="http://www.cromosrepes.com/css/tabla_gris.css" rel="stylesheet" 	type="text/css" />
<link href="http://www.cromosrepes.com/css/colecciones_listado.css" rel="stylesheet" type="text/css" />
<h1><?php echo $title ?></h1>

<div id="contenedor_contacto">
        <div id="mainContent">Nos gusta escuchar lo que quieras contarnos.<br />
          <br />
          Si quieres mandarnos un mensaje puedes hacerlo a la dirección: cromosrepes @ gmail.com
          <!-- end #mainContent -->
        </div>
        <p>&nbsp;</p>
        <div id="mainContent">Si llevas poco tiempo con nosotros y tienes dudas de como funciona la página.<br />
          <br />
          Puedes escribir al usuario: <a href="http://www.cromosrepes.com/mensajes/nuevo/ayuda">Ayuda</a>
          <!-- end #mainContent -->
        </div>
        <p>Te contestaremos lo antes que podamos, pero pueden pasar varios días, en fechas festivas este tiempo puede aún  mayor.</p>
        <p>&nbsp;</p>


</div>
<div id="volver">
<hr />
<?php echo anchor  ('colecciones/lista','Colecciones'	,array('class'=>'back')) ?> |
<?php echo anchor  ('ayuda/indice'		,'Ayuda'		,array('class'=>'back')) ?> |
<?php echo anchor  ('noticias'			,'Noticias'		,array('class'=>'back')) ?>
</div>
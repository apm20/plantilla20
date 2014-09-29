<link href="http://www.cromosrepes.com/css/coleccion_ficha.css" rel="stylesheet" type="text/css" />
<h1><?php echo $title ?></h1>
<div id="mensajes">
<?php if (!$existe){ ?>
<p>La colección no existe.</p>
<?php } else { ?>
    <?php if (!$la_tiene){ ?>
	<p>No eres coleccionista de: <?php echo  $coleccion["nombre"]?></p> <br />
	</div><br />    
	<?php } else { ?>       
	    <?php if (!$confirmado){ ?>    
            <p>¿Confirmas que quieres borrar todas tus faltas y repetidos de la colección: <?php echo $coleccion["nombre"]?></p>        
            <p>Después no podrás deshacer esta operación.</p>                
			<button class="btn btn-default"><i class="glyphicon glyphicon-ok-sign"></i> <?php echo anchor( 'coleccion/borrarlista/'.$coleccion["esc_nombre"]."/1","Si, quiero borrarme")?></button>
			</div><br />    

		<?php } else { ?>           
			<?php if (!$exito){ ?>
	            <p>Error al borrar las faltas y repes de la colección.</p>
	            <p>Notifícaselo al administrador.</p>                
            <?php } else { ?>
                <p>Las faltas y repes han sido borrados de la colección: <?php echo  $coleccion["nombre"]?></p>
            <?php }  ?>
		<?php }  ?>            
	<?php }  ?>           
<?php }  ?>    

<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i> <?php echo $link_back ?></button>
</div>

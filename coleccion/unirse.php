<link href="http://www.cromosrepes.com/css/coleccion_ficha.css" rel="stylesheet" type="text/css" />
<h1><?php echo $title ?></h1>
<div id="mensajes">
<?php if (!$existe){ ?>
<p>La colección no existe.</p>
<?php } else { ?>
    <?php if ($la_tiene){ ?>
	<p>No te acordabas pero... ya eras coleccionista de: <?php echo  $coleccion["nombre"]?></p> <br />
<button class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i> <?php echo anchor( 'listas/detalle/'.$sesion["ses_nick_mostrar"]."/".$coleccion["esc_nombre"],"Ir a mi lista de ".$coleccion["nombre"])?></button>	</div>
	<?php } else { ?>
		<?php if ($caducado){ ?>
				<p style="color:red">Ha transcurrido un año desde tu última aportación como colaborador, ahora eres un usuario normal.</p>
	            <p style="color:red">No puedes unirte a la colección porque has llegado al máximo de 20 colecciones (incluidas las finalizadas) , para un usuario normal.</p>
	            <p>Puedes borrar alguna tus listas o realizar una nueva donación. </p>
	            <p>Más información en <a href="http://www.cromosrepes.com/ayuda/Colaboradores" title="ayuda usuarios especiales">ayuda usuarios especiales</a></p>
		<?php } else { ?>
		    <?php if ($maximo) {?>
	            <?php if ($socio==0){ ?>
	            <p style="color:red">Lo sentimos, pero has llegado al máximo de 20 colecciones (incluidas las finalizadas), para un usuario normal</p>
<p>Los usuarios Colaboradores tienen hasta 100 colecciones. Para ser Colaborador solo tienes que hacer una donación de 6 euros.</p>
	            <p>Los usuarios VIP tienen hasta 250 colecciones. Para ser VIP solo tienes que hacer una donación de 12 euros.</p>
	            <p>Puedes encontrar más información en <a href="http://www.cromosrepes.com/ayuda/Colaboradores" title="ayuda usuarios especiales">ayuda usuarios especiales</a></p>
				<?php } else {
						switch ( $socio ) {
							case 2:
								?><p>El máximo de colecciones para un usuario vip son 250. </p><?php
								break;
							case 3:
								?><p>El máximo de colecciones para un vip plata son 400. </p><?php
								break;
							case 4:
								?><p>El máximo de colecciones para un vip oro son 600. </p><?php
								break;
							case 5:
								?><p>El máximo de colecciones para un vip diamante son 800. </p><?php
								break;
							case 9:
								?><p>El máximo de colecciones para un colaborador especial son 600. </p><?php
								break;
							default:
								?><p>El máximo de colecciones para un colaborador son 100. </p><?php
						}?>

                <?php } ?>
			<?php } else { ?>
				<?php if (!$exito){ ?>
						<p>Error al unirte a la colección.</p>

						<?php if ($status == 1){ ?>
								<p>Notifícaselo al administrador.</p>
						<?php } else { ?>
							<?php if ($status == 4){ ?>
								<p>Tu cuenta está temporalmente suspendida.</p>
							<?php } elseif ($status == 5){ ?>
								<p>Estás expulsado.</p>
							<?php }  ?>
						<?php }  ?>

	            <?php } else { // exito ?>
	                <p>Te acabas de unir a la colección: <?php echo  $coleccion["nombre"]?></p>
					<p>Ahora solo tienes que rellenar tus faltas y tus repes, y después usar el buscador para empezar a cambiar.</p>
				<button class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i> <?php echo anchor( 'listas/detalle/'.$sesion["ses_nick_mostrar"]."/".$coleccion["esc_nombre"],"Rellenar Faltas y Repes")?></button>
				<br />
	            <?php }  ?>
			<?php }  ?>
		<?php }  ?>
	<?php }  ?>
<?php }  ?>

<br>
<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i> <?php echo $link_back ?></button>
</div>

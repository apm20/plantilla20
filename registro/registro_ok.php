<h1>Registro Completo Correcto </h1>

<p> <?php echo $nick?> En breve recibir&aacute;s un correo en <?php echo $email ?> para confirmar tu registro </p>
<p> Gracias por registrarte en CromosRepes.com </p>
<p> Si tuvieses problemas en recibir el correo escribenos a cromosrepes@gmail.com</p>
<hr />
<?php
	$atts = array(
					  'width'      => '800',
					  'height'     => '600',
					  'scrollbars' => 'yes',
					  'status'     => 'yes',
					  'resizable'  => 'yes',
					  'screenx'    => '0',
					  'screeny'    => '0'
					);

	if ( !strcmp( $dominio, "gmail.com" )  )
		echo anchor_popup('http://www.gmail.com', 'Ir a revisar correo de '.$dominio, $atts);
	if ( !strcmp( $dominio, "hotmail.com" )  )
		echo anchor_popup('http://www.hotmail.com', 'Ir a revisar correo de '.$dominio, $atts);
	if ( !strcmp( $dominio, "hotmail.es" )  )
		echo anchor_popup('http://www.hotmail.com', 'Ir a revisar correo de '.$dominio, $atts);

?>
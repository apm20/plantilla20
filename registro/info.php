<h1>Informaci&oacute;n </h1>

<?php switch ( $codigo ) {
	case 100: ?>
<p> <?php echo $nick?> Has confirmado tu cuenta de correo <?php echo $email ?>  </p>
<p> Bienvenido a Cromosrepes.com pulsa <?php echo anchor('usuario/login','AQUÍ')?> para entrar a la comunidad </p>
<?php 		break; 
	case -100: 
	default  : ?>
<p> 	 Error en la confirmación de tu cuenta de correo <?php if (isset($email)) echo $email; ?>  </p>
<p> 	 Si no has recibido tu correo de activaci&oacute;n, revisa tu bandeja de correo no deseado (SPAM) o escríbenos a <strong>cromosrepes@gmail.com</strong> </p>
<?php 		break;     
} ?>	
<hr />

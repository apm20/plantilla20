<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if (!isset($destino) || (isset($prohibido) && $prohibido>0)) {
        switch ( $prohibido  ) {
                case 1: // temporal ?>
            <h1>Sistema Ocupado</h1>
            <h4><?php echo "Espera ".$espera." segundos el sistema est&aacute; ocupado";        ?></h4>
                <?php   break;
                case 2: // Maximo no colaborador ?>
            <h1>Maximo peticiones diarias</h1>
            <h4>Has llegado al m&aacute;ximo de cruces diarios. Ma&ntilde;ana puedes continuar.</h4>
                <?php   break;
                case 3: // Maximo colaborador ?>
            <h1>Maximo peticiones diarias</h1>
            <h4>Has llegado al m&aacute;ximo de cruces diarios. Ma&ntilde;ana puedes continuar.</h4>
                <?php   break;
        } ?>
<?php } else { ?>
<h1><?php echo $title." ".$this->estilo->NickSeriedad($destino[0]["nick_mostrar"],
		$destino[0]["total_pos"],$destino[0]["total_neg"],$destino[0]["seriedad"],$destino[0]["socio"],
		$destino[0]["ultimo_login"],$destino[0]["velocidad"],$destino[0]["pais_id"],1) ?>
</h1>
<h4><?php echo (isset($mensaje) ? $mensaje : "")?></h4>

<div id="wait" style="position:absolute; top:16em; visibility:hidden; z-index:1; " >
<img src="http://www.cromosrepes.com/img/wait_flower.gif">Enviando el mensaje</img>
</div>


<form method="post" name="form1" class="main_content" id="form1" action="<?php echo $action; ?>"
onsubmit="return validar(this);">


<input type="hidden" name="destinatario" value="<?php echo $destino[0]["nick"]?>" />
<input type="hidden" name="tipo_ventana" value="<?php echo $tipo_ventana?>" />
<div class="input-group">
      <INPUT type="text" name="asunto" placeholder="Asunto" class="form-control" minlength=3 value="Petici&oacute;n de cambio" />
      <span class="input-group-btn">
       <button type="submit" class="btn btn-default">Enviar Mensaje a <?php echo $destino[0]["nick_mostrar"]?></button>
      </span>
    </div><!-- /input-group -->
<p><p>


<textarea name="mensaje" class="form-control" rows="10" style="width:100%; height:40em; padding: 0; margin: 0;">
<?php
	echo 'Hola '.$destino[0]["nick_mostrar"].', me interesan tus siguientes cromos:';
	Pintar( $te_interesa, $colecciones);
	echo "\n  ";
	if ( count($sus_faltas) == 0) {
		echo "_____________________\n\n▬ No tengo cromos que te interesen pero puedo ofrecerte sellos o sobres sin abrir de alguna colección.";
	} else {
		echo "_____________________\n\n▬ Yo a cambio puedo ofrecerte:";
		Pintar( $sus_faltas, $colecciones );
	}
	echo "\n\nDime si te parece bien el cambio.\nSaludos.";
?>
</textarea>
    </form>
<?php } ?>
<input type="button" class="btn btn-default" value="Volver al Buscador" onclick="window.close()">






<p>
</p>





<?php
function Pintar ( $te_interesa, $p_colecciones) {
	$cuantos=0;$anterior=0;
	foreach ((array)$te_interesa as $interesa):
		if ( strcmp( $interesa["coleccion_id"],$anterior) ) {
			$anterior=$interesa["coleccion_id"];
			echo "\n\n►  ".NombreColeccion($p_colecciones,$interesa["coleccion_id"])."\n\n";
		} else {
			echo ",";
		}
		echo ltrim($interesa["nombre"],"0");
		$cuantos++;
  	endforeach;
}

function NombreColeccion ($colecciones, $p_id) {
	foreach ((array)$colecciones as $col):
		if (  $col["id"] == $p_id ) {
			return $col["nombre"];
		}
  	endforeach;

}

/*
function PintarCambio ( $te_interesa, $p_colecciones) {
	$cuantos=0;$anterior=0;
	foreach ((array)$te_interesa as $interesa):
		if ( strcmp( $interesa["coleccion_id"],$anterior) ) {
			$anterior=$interesa["coleccion_id"];
			echo "\n\n* ".NombreColeccion($p_colecciones,$interesa["coleccion_id"])."\n";
		} else {
			echo ", ";
		}
		echo ltrim($interesa["nombre"],"0");
		$cuantos++;
  	endforeach;
}
*/
?>

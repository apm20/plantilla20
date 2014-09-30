<?php  // cada cromo tiene un hidden con la marca, podemos poner en hidden reserva y espera
	// ASI AL VIAJAR EL RESULTADO DEL FORMULARIO SOLO SE TOCAN LOS QUE HAYAN CAMBIADO
/*
foreach ( $javascript as $fic_js ) { ?>
	<script type="text/javascript" src="<?php echo  $fic_js ?>"></script>
<?php }
*/
	function PintaCelda( $nombre, $cuantos, $marca, $pos )
	{
		?><td><input class='c<?php echo $marca?>' style="width:1.5em" maxlength="2" name='cr[]' value='<?php echo $cuantos?>'
   onmousedown='return dont(event)' onmouseup='return buttonalert(event,this)'
   onclick='return dont(event)' ondblclick='return dont(event)'
   oncontextmenu='return dont(event)'>


	<label for='cr[]' onmousedown='return dont(event)' onmouseup='return p(event,<?php echo $pos; ?>)'
   onclick='return dont(event)' ondblclick='return dont(event)'
   oncontextmenu='return dont(event)'>
   		<?php if ($cuantos>0){ ?><font color="#FF0000"><?php } ?><?php echo $nombre?><?php if ($cuantos>0){ ?></font><?php } ?>
   </label>

		<input type='hidden' name='marca[]' value='<?php echo $marca; ?>' >
		</td><?php
	}

?>
<link href="http://www.cromosrepes.com/css/input.css" rel="stylesheet" 	type="text/css" />

<h1><?php echo $title ?></h1>

<form name="f1" method='post' action="" >


<table class="table table-bordered">
  <tr>
    <td width=50% class="success"><center><input type="checkbox" name="izdo" value="izdo" <?php if ($izdo == 1) echo "checked" ?> /> Añadir cromo con el botón izquierdo del ratón</center></td>
    <td width=50% class="danger"><center><input type="checkbox" name="dcho" value="dcho" <?php if ($dcho == 1) echo "checked" ?> /> Quitar cromo con el botón derecho del ratón</center></td>
  </tr>
</table>





<p></p>

	<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php echo $link_back; ?></button>
    <input class='btn btn-success btn-circle' type='submit' name='btn_ok' id='btn_ok' onclick="this.style.visibility = 'hidden';" />
    <input class='btn btn-default' type='button' name='btn_todo_marcar' id='btn_todo_marcar' value="Marcar Todos" onclick="javascript:seleccionar_todo()" />
    <input class='btn btn-default' type='button' name='btn_todo_desmarcar' id='btn_todo_desmarcar' value="Desmarcar Todos" onclick="javascript:deseleccionar_todo()" />
<p></p><center>
<table class="table table-bordered">
    <tr align="center" class="active">
<?php
	$por_fila = $coleccion->esp_fila;
	echo "<thead><td colspan='".$por_fila."'><center><strong>Secciones</strong></center></td></thead>";
	$cuantos     =1;
	foreach ($grupos as $grp) {
		echo '<td><a href="#'.$grp["nombre"].'"	>'.$grp["nombre"].'</a></td>';
		if ( $cuantos % $por_fila == 0)
			echo "</tr><tr>";
		$cuantos++;
	}
	// Relleno los huecos de la última fila para que no quede negro
	$cuantos--;
	while ( $cuantos % $por_fila != 0) {
		echo "<td></td>";
		$cuantos++;
	}

?>
</tr></table>
</center>
<?php // OJO SI HAY UN GRUPO SIN CROMOS SALDRAN LOS GRUPOS DESCOLOCADOS
   // BORRAR DICHOS GRUPOS AL PUBLICAR LA COLECCION
   // SI CREAMOS EL GRUPO NUMEROS HAY QUE HACERLO SIEMPRE CON EL NUMERO 1 Y LETRAS CON EL 2 Y ALBUMES CON EL 3
   // HACERLO EN LA FUNCION DE CREAR GRUPO, EL RESTO DE GRUPOS SIEMPRE ID>9
?>

	<table class="table table-bordered"><tr align="center" class="active">
<?php
	$cuantos     =1;
	$ant_grupo   =0;
	$cuenta_grupo=0;
	$por_fila    =10;
	$pos         =0;
	foreach ($cromos as $row)
	{

		if ( $ant_grupo != $row["grupo_id"] ) {
			// rellenamos la ultima fila del grupo
			if ( $cuenta_grupo > 0 ) {
				$cuantos--;
				while ( $cuantos % $por_fila != 0) {
					echo "<td></td>";
					$cuantos++;
				}
			}

			$ant_grupo = $row["grupo_id"];
			$por_fila = $coleccion->esp_fila;
			if ( $ant_grupo == 1 )
				$por_fila = $coleccion->num_fila;
			if ( $ant_grupo == 3 )
				$por_fila = 3;


			echo "</tr></table><br /><a name='".$grupos[$cuenta_grupo]["nombre"]."'></a><table class='table table-bordered'>";
			$cuantos=1;
		echo '<thead><td class="active" colspan='.$por_fila.'><strong>'.$grupos[$cuenta_grupo]["nombre"].'</strong>'.$grupos[$cuenta_grupo]["prefijo"].'</td></thead>';
			$cuenta_grupo++;
		}

		PintaCelda( $row["nombre"], $row["cuantos"], $row["marca"], $pos );
//		echo "<td><label for='cr[]'>".$row["nombre"]."</label><input size='1' maxlength='2' name='cr[]' ";
//		echo "value='".$row["cuantos"]."' ></td>";
//		echo "<input type='hidden' name='marca[]' value='".$row["marca"]."' >";
		if ( $cuantos % $por_fila == 0)
			echo "</tr><tr>";
		$cuantos++;
		$pos++;
	}

//echo "c".$cuantos." pf ".$por_fila." grp ".$cuenta_grupo;

	// rellenamos la ultima fila del grupo
	if ( $cuenta_grupo > 0 ) {
		$cuantos--;
		while ( $cuantos % $por_fila != 0) {
			echo "<td></td>";
			$cuantos++;
		}
	}

?>
	</tr></table>
<p></p>Guarda cada 5 minutos para no perder los cambios
<br/>* cromo especial
    </form>

</p>

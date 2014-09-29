<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://www.cromosrepes.com/css/tabla_gris.css" rel="stylesheet" 	type="text/css" />
<?php if ( isset($espera) && $espera>0 ) { ?>
	<h1>Sistema Ocupado</h1>
	<h4><?php echo "Espera ".$espera." segundos el sistema est&aacute; ocupado";	?></h4>
	<?php echo anchor("buscador/coleccion/".$usuario_id."/".$coleccion_id."/".$cualquiera," Intentar de nuevo ")."</p>";?>
    <?php return; ?>
<?php } else { ?>
	<h1><?php echo $title." para la coleccion: ".$coleccion[0]["nombre"] ?></h1>
	<h4><?php echo (isset($mensaje) ? $mensaje : "")?></h4>
	
	<p><strong>
<?php if ( $cualquiera == 0 ) { ?>
Usuarios que tienen repes que necesitas y a la vez tú tienes repes que a ellos les faltan.
<?php } else { ?>
Usuarios que tienen repes que necesitas pero quizá no tengas nada que ofrecerles:
<?php } ?>
</strong></p>
<div id="resultados">
<?php
if (count($lista_repes)==0) {
	echo "<p>Todav&iacute;a nadie tiene tus faltas.</p>";
} else {
	$ant_usu="";$total=0;$primer_cromo=1;
	foreach ((array)$lista_repes as $repe):
        if ( $repe["usuario_id"] != $ant_usu ) {
			$primer_cromo=1;
			if ($total >0)
				echo "<br />Total: ".$total;
			$total=0;
            if ( $repe["socio"] > 0 )	echo "<strong>";

			echo "<hr /><p>".anchor_popup( "listas/detalle/".$repe["nick_mostrar"]."/".$coleccion_id,
						$this->estilo->NickReputa($repe["nick_mostrar"],$repe["total_pos"],$repe["total_neg"],$repe["socio"],$repe["ultimo_login"],$repe["velocidad"]),array())." ";?>

			<a href='<?php echo site_url("buscador/cruce/".$usuario_id."/".$repe["usuario_id"])?>'
			onclick='var w=window.open(this.href,"popupWindow","width="+screen.width+", height="+screen.height+", location=yes, directories=no, menubar=no, scrollbars=yes, status=no","yes"); w.focus(); return false'><button class="btn btn-success btn-xs"> Pedir cambio</button> </a>
			<?php if ( $repe["socio"] > 0 ) {
					echo "</strong> ";
				  }
			if ( strlen ($repe["motd"])>0 ) echo "<span class='badge badge-info'> ".$repe["motd"]." </span>";
			echo "</p>";

			$ant_usu = $repe["usuario_id"];
		}
		if ($primer_cromo == 1)
			$primer_cromo=0;
		else
			echo ", ";
			echo ltrim($repe["nombre"],"0");
//		echo $repe["nombre"];
		$total++;
  endforeach;
  if ($total >0)
  	echo "<p>total: ".$total."</p>";
} // sistema ocupado
?><hr>

<?php if ( $cualquiera == 0 ) 
     echo anchor("buscador/coleccion/".$usuario_id."/".$coleccion[0]["id"]."/1","<p></p><button class='btn btn-default'>Ampliar búsqueda (Aparecerán usuarios a los que quizá no tengas nada que ofrecerle)</button>")."</p>";
   
  
}
?>
<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i> <?php echo $link_back; ?></button>
</div>

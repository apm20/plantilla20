<?php /* <link href="http://www.cromosrepes.com/css/tabla_gris.css" rel="stylesheet" type="text/css" />
<link href="http://www.cromosrepes.com/css/colecciones_listado.css" rel="stylesheet" type="text/css" />
*/ ?>
<h1><?php echo $title.$mensaje ?></h1>

<form name="libre" action="<?php echo base_url().'colecciones/lista'?>" method="post" onsubmit="return validar(this);" >
<div class="row">
<div class="col-md-4">
<div class="input-group input-group">
  <span class="input-group-addon">Colección</span>
  <input type="text" name="clave" id="clave" size="30" maxlength="100" placeholder="todas" class="form-control">
</div>

</div>
<div class="col-md-4">
<div class="input-group input-group">
  <span class="input-group-addon">Editorial</span>
  <select name="editorial" id="editorial" title="Elige la Editorial" class="form-control">
<option  value="" selected ></option>
<?php	foreach ($editoriales as $reg_ed )
{
echo "<option value='".strtolower(trim($reg_ed["nombre"]));
echo "'>".$reg_ed["nombre"]."</option>";
}
?>
</select>
</div>

</div>
<div class="col-md-4">
<div class="input-group input-group">
  <span class="input-group-addon">Tipo</span>
  <select name="tipo" id="tipo" title="Elige el tipo de Colección" class="form-control">
<option  value="" selected ></option>
<?php	foreach ($tipos as $reg_tipo )
{
echo "<option value='".strtolower(trim($reg_tipo["nombre"]));
echo "'>".$reg_tipo["nombre"]."</option>";
}
?>
</select>
</div>

</div>
</div>
<br/>
 <center><button class="btn btn-default" type="submmit"><i class="glyphicon glyphicon-search"></i> Buscar</button></center>

</form>
<hr/>
<p></p>
<p></p>
<?php if ( isset($colecciones) && count($colecciones) ) {
$contador=0;
?>
<ul style="v">
<?php PintarColecciones ($colecciones); ?>
<?php /* foreach ($colecciones as $row):
if ($contador<500) {?>
<li><?php echo anchor('coleccion/ficha/'.$row["esc_nombre"].'/'.$row["id"],$row["nombre"],
array("title" => $row["ano_publica"]." ".$row["editorial_nombre"] )) ?></li>
<?php $contador++;
}
endforeach; */ ?>
</ul>
<?php if ($contador==500) {
$total_colecciones=intval(count($colecciones)/10)*10;
echo "...<br>";
echo "500 de un total de ".$total_colecciones." colecciones. Utiliza el campo buscar para refinar tu b&uacute;squeda. ";
} else { ?>
<?php echo count($colecciones)." colecciones (en negrita colecciones recientes populares)" ?>
<?php } ?>

<?php } else { ?>
<?php echo "No hay colecciones que cumplan los criterios. Elige otros diferentes"; ?>

<p>
-<?php }?>		
<hr><?php echo anchor ( "colecciones/lista/todas" , 'Todas' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/adrenalyn" , 'Adrenalyn' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/baloncesto" , 'Baloncesto' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/barbie" , 'Barbie' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/ben%2010" , 'Ben10' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/bratz" , 'Bratz' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/chicle" , 'Chicle' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/dragonball" , 'Dragonball'	, array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/doraemon" , 'Doraemon'	, array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/futbol" , 'F&uacute;tbol' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/grefusa" , 'Grefusa'	, array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/gormiti" , 'Gormiti' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/harry%20potter" , 'Harry Potter' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/inazuma" , 'Inazuma Eleven' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/invizimals" , 'Invizimals' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/liga" , 'Liga' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/este" , 'Este' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/megacracks"	, 'Megacracks' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/mundicromo"	, 'Mundicromo' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/monster%20high"	, 'Monster High'	, array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/magic" , 'Magic the Gathering'	, array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/pokemon" , 'Pok&eacute;mon' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/tazos" , 'Tazos' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/winx" , 'Winx' , array('class'=>'back') )." | ";
echo anchor ( "colecciones/lista/wwe" , 'WWE' , array('class'=>'back') )."";
?>
<p></p>
<p></p>
 <button class="btn btn-default" onClick="location.href='../wiki/cocinando'"><i class="glyphicon glyphicon-ok"></i> Crear nueva colección</button>
<?php
function PintarColecciones ( $colecciones ) {
$ahora = date("Y-m-d");
$hace_un_ano = add_date($ahora,-9); // seis meses de antiguedad
$contador=0;
foreach ($colecciones as $row):
if ($contador<500) {
echo "<li>";
if ( $row["f_alta"]> $hace_un_ano && $row["coleccionistas"]>9 ) {
echo "<strong>";
}
echo anchor('coleccion/ficha/'.$row["esc_nombre"].'/'.$row["id"],$row["nombre"],
array("title" => $row["ano_publica"]." ".$row["editorial_nombre"].$row["f_alta"] ));
if ( $row["f_alta"]> $hace_un_ano ) {
echo "</strong>";
}
echo "</li>";
$contador++;
}
endforeach;
}
function add_date($orgDate,$mth){
$cd = strtotime($orgDate);
$retDAY = date('Y-m-d', mktime(0,0,0,date('m',$cd)+$mth,date('d',$cd),date('Y',$cd)));
return $retDAY;
}
?>

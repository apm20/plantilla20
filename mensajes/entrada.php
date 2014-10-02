<?php  // poner (array) evita el error "Invalid argument supplied for foreach()"
/*if ( isset ($javascript) && count($javascript)>0 ) {
	foreach ( (array)$javascript as $fic_js ) { ?>
<script type="text/javascript" src="<?php echo  $fic_js ?>"></script>
<?php } 
} */?>
<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://pruebas.cromosrepetidos.com/css/msgleido.css" media="screen" />
<?php if ($sesion["ses_socio"]==0){ ?>
<center>
<?php /* Sincrono
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8628628791781009";
// Bandeja Entrada 
google_ad_slot = "8113957311";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
*/ ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Bandeja Entrada -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8628628791781009"
     data-ad-slot="8113957311"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>

<?php }?>
<h1><i class='fa fa-envelope-o'></i> <?php echo $title ?></h1>
<?php enlaces( $estado ); ?>
<p></p>
<center>

<table class="table table-bordered table-hover">
<thead>
    <tr align="center" class="active">
        <td width="15%"><strong>Fecha</center></td>
        <td width="15%"><strong>Remitente<strong></dh>
        <td width="8%"><strong><abbr title="Indica si el mensaje a sido respondido"><i class="fa fa-share"></i></strong></abbr></td>
        <td width="57%"><strong>Asunto</strong></td>
        <td width="5%"><strong></strong></td>
    </tr>
</thead>
<tbody>

<?php $url_esc = $this->estilo->EscapaUrl (uri_string());
	$cuantos = 0;
   foreach ($encabezados as $row): ?>

    <?php  if ($row["leido"]==0) echo "<tr class='noleido' align='center'><td>"; else echo "<tr  class='leido' align='center'><td>"; ?>
		<?php echo  $this->estilo->PintaFechaHora($row["f_alta"]) ?>
        </td><td>
        <?php echo  anchor('listas/nick/'.$row["nick"],$row["nick_mostrar"]) ?>
       </td><td>
        <?php if ($row["leido"]=='2') echo '<abbr title="Respondido"><i class="fa fa-share"></i></abbr>'; else echo '&nbsp;'; ?>
        </td><td align="left">
        <?php if (strlen ($row["asunto"])>0 ) { 
            	echo anchor('mensajes/detalle/'.$row["id"]."/".$url_esc, $row["asunto"], array('name' => 'a'.$row["id"]) );
           	}
        ?>
        </td><td>
        
        <button type="button" class="fa fa-times btn btn-outline btn-warning btn-circle btn-xs" name="<?php echo $row["id"]?>"></button>
		<?php $cuantos ++; ?>
        </td></tr>
    <?php if ( $row["leido"]=='0' ) echo "</strong>" ?>        


<?php } // if ( $cuantos == 0) ?>

</tbody>

</table>
<?php endforeach; ?>
<?php if ( $cuantos == 0) { echo "<p>El buzón está vacío</p>"; } else { ?>

<p></p>


       
<?php   if ( $pagina >0)
			echo anchor  ('mensajes/entrada/'.(intval($pagina)-1).'/'.$estado,' <button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"> </i>  Anterior</button>',array('class'=>'back'));
?>
  	   Página <?php echo  $pagina+1 ?>
 <?php      if ( $cuantos >20)
			echo anchor  ('mensajes/entrada/'.(intval($pagina)+1).'/'.$estado,'<button class="btn btn-default">Siguiente <i class="glyphicon glyphicon-chevron-right"> </i></button> ',array('class'=>'back'));
		
?>					
		

<?php
function enlaces ( $estado ) {
    echo ('<div class="btn-group-vertical ">');
    echo ('<div class="btn-group">');

    echo anchor  ('mensajes/menu/'				,'<button class="btn btn-default"><i class="fa fa-chevron-left"> </i> Volver</button>'		,array('class'=>'back')).' ';
    echo anchor  ('seleccion/buscar/mensajes'	,'<button class="btn btn-success"><i class="fa fan-plus"> </i> Nuevo mensaje</button>',array('class'=>'back')).' ';

    if ( $estado == 'S' ) {
        echo anchor (array ( 'social','ListaNegra' ),'<button class="btn btn-warning btn-outline"><i class="fa fa-eye-slash"> </i> Ver lista de ignorados</button>',array('class'=>'back'));
    }
    echo ('</div>');
    echo ('</div>');
    echo ('<hr />');

   
    echo '<ul class="nav nav-tabs" role="tablist">';
    echo '<li ';
    if ( $estado == '0' ) echo 'class="active"';
    echo '>'.anchor('mensajes/entrada/0/0'		,'<i class="fa fa-inbox"></i> Buzón de entrada',array('class'=>'back')); 
    echo '</li>';
    echo '<li ';
    if ( $estado == '2' ) echo 'class="active"';
    echo '>'.anchor('mensajes/entrada/0/2'		,'<i class="fa fa-comments-o"> </i> Negociando',array('class'=>'back'));	
    echo '</li>';
    echo '<li ';
    if ( $estado == '4' ) echo 'class="active"';
    echo '>'.anchor('mensajes/entrada/0/4'		,'<i class="fa fa-clock-o"> </i> Esperando',array('class'=>'back'));
    echo '</li>';
    echo '<li ';
    if ( $estado == '1' ) echo 'class="active"';
    echo '>'.anchor('mensajes/entrada/0/1'		,'<i class="fa fa-remove"> </i> Borrados',array('class'=>'back'));
    echo '</li>';
    echo '<li ';
    if ( $estado == 'S' ) echo 'class="active"';
    echo '>'.anchor('mensajes/entrada/0/S'		,'<i class="fa fa-trash"> </i> No deseado',array('class'=>'back'));
    echo '</li>';
    echo '<li ';
    if ( $estado == 'E' ) echo 'class="active"';
    echo '>'.anchor('mensajes/entrada/0/E'		,'<i class="fa fa-send"> </i> Enviados',array('class'=>'back'));
    echo '</li>';
    
    if ( $estado == 'E' || $estado == 'F' ) {
    	echo '<li ';
    	if (  $estado == 'F' ) 
    		echo 'class="active"';
	echo '>'.anchor('mensajes/entrada/0/F'		,'<i class="fa fa-remove"></i><i class="fa fa-send"></i> Enviados Borrados',array('class'=>'back'));
    	echo '</li>';
    }
    
    echo '</ul>';

    
/*    
    
	if ( $estado != 0 ) 
		echo '  '.anchor('mensajes/entrada/0/0'		,'<button class="btn btn-default"><i class="glyphicon glyphicon-inbox"> </i> Buzón de entrada</button>',array('class'=>'back'));
	if ( $estado != 2 )
		echo '  '.anchor('mensajes/entrada/0/2'		,'<button class="btn btn-default"><i class="glyphicon glyphicon-transfer"> </i> Negociando</button>',array('class'=>'back'));	
	if ( $estado != 4 )
		echo '  '.anchor('mensajes/entrada/0/4'		,'<button class="btn btn-default"><i class="glyphicon glyphicon-time"> </i> Esperando</button>',array('class'=>'back'));
	if ( $estado != 1 )
		echo '  '.anchor('mensajes/entrada/0/1'		,'<button class="btn btn-default"><i class="glyphicon glyphicon-remove"> </i> Borrados</button>',array('class'=>'back'));
	if ( $estado != 'S' )
		echo '  '.anchor('mensajes/entrada/0/S'		,'<button class="btn btn-default"><i class="glyphicon glyphicon-ban-circle"> </i> No deseado</button>',array('class'=>'back'));
	else
		echo '  '.anchor (array ( 'social','ListaNegra' ),'<button class="btn btn-danger"><i class="glyphicon glyphicon-eye-close"> </i>Ver lista de ignorados</button>',array('class'=>'back'));
*/

}		
?>


</center>

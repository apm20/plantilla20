// Esta línea se usa para indicarle al framework que cuando
// cargue la página ejecute lo que va a continuación
$(document).ready( function() {
// Con esta linea le indicamos que cúando se haga click
// sobre un elemento con identificador #enlace
	$('#enlace').click(function(){
		// Recojamos el valor de un "input" cuyo nombre sea "saludar"
		var valor        = $("#notas").val();
		var usuario_id   = $("#usuario_id").val();		
		var coleccion_id = $("#coleccion_id").val();		

document.body.style.cursor = 'wait';

		// Y por GET llamemos a un fichero php llamado "procesar.php"
		// pasándole como parámetro la variable anteriormente definida
		// como "saludar"
		// Nota: los parámetros se pasan como JSON
		$.get('coleccion.php?fn=guardaNota',
			{p_nota:valor,p_usuario_id:usuario_id,p_coleccion_id:coleccion_id
			}, function(data){
			// Cuando recibimos la respuesta convertimos esa respuesta
			// en html y visualizamos esa respuesta en el div
			// con id "#ajax" que teníamos oculto en la página HTML
document.body.style.cursor = 'default';			
		});
	});
});
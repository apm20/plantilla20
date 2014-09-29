/* VERSION 2.0 */
/* Javascript para gestión de listas de repes y faltas */

function seleccionar_todo(){ 
   for (i=0;i<document.f1.elements.length;i++) 
		if(document.f1.elements[i].type == "text")	{
			elemento = document.f1.elements[i].parentNode;
			if (elemento.textContent.substring(0,5)!="Album" ) {
	         	document.f1.elements[i].value="1" 				
			}

	  }
} 

function deseleccionar_todo(){ 
   for (i=0;i<document.f1.elements.length;i++) 
		if(document.f1.elements[i].type == "text")	{
			elemento = document.f1.elements[i].parentNode;
			if (elemento.textContent.substring(0,5)!="Album" ) {
	         	document.f1.elements[i].value="0" 				
			}

	  }
} 

/*
function Incrementa(campo) {
	if( campo.value==null || campo.value.length==0 || campo.value == '0') {
		campo.value = '1';
		campo.className='nuevo_repe';
	} else { 
		campo.value = parseInt(campo.value)+1;
		campo.className='quito_repe';
	}
}

function Decrementa(campo) {
	if( campo.value==null || campo.value.length==0 || campo.value == '0') {
		campo.value = '0';
		campo.className='nuevo_repe';
	} else { 
		campo.value = parseInt(campo.value)-3;
		campo.className='quito_repe';
	}
}
*/
function buttonalert(event,campo)
{
    var button;
	if (event.which == null)
       button= (event.button < 2) ? "LEFT" :
                 ((event.button == 4) ? "MIDDLE" : "RIGHT");
    else
       button= (event.which < 2) ? "LEFT" :
                 ((event.which == 2) ? "MIDDLE" : "RIGHT");

	if ( campo.value ==null || campo.value.length==0)
		campo.value='0';
				 
	if (button=="LEFT") {
		if (document.f1.izdo.checked) {
			campo.value = parseInt(campo.value)+1;
		} else {
			if ( document.f1.dcho.checked && parseInt(campo.value) > 0 )
				campo.value = parseInt(campo.value)-1;
			else
				campo.focus();
		}
	} else if (button=="RIGHT"){
		if ( document.f1.dcho.checked && parseInt(campo.value) > 0 )
			campo.value = parseInt(campo.value)-1;		
	} else if (button=="MIDDLE"){
		campo.className = "c" + campo.value;
		campo.value = parseInt(campo.value)+1;
	}
//    alert(campo.value);
    dont(event);
}
function dont(event)
{
    if (event.preventDefault)
        event.preventDefault();
    else
        event.returnValue= false;
     return false;
}
function p(event,i) 
{
	if (event.which == null)
       button= (event.button < 2) ? "LEFT" :
                 ((event.button == 4) ? "MIDDLE" : "RIGHT");
    else
       button= (event.which < 2) ? "LEFT" :
                 ((event.which == 2) ? "MIDDLE" : "RIGHT");


	var multi  = document.f1.elements["marca[]"];
	var cromos = document.f1.elements["cr[]"];	
	//alert(multi[i].value);

		
	if ( multi[i].value ==null || multi[i].value.length==0)
		multi[i].value='0';
				 
	if (button=="LEFT" ) {
		multi[i].value = (parseInt( multi[i].value )<4 ) ?  parseInt(multi[i].value)+1 : 0;
	} else if (button=="RIGHT"){
		multi[i].value = 0;
	}
	
	cromos[i].className = "c" + multi[i].value;
	
	dont (event);	
}
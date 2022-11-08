"use strict"
function validar(){
	var id_persona = document.formu.id_persona.value;
	var usuario = document.formu.usuario.value;
	var clave = document.formu.clave.value;
	

	if (id_persona=="") {
		alert("por favor seleccione a una persona");
		document.formu.id_persona.focus();
		return;
	}
	if (usuario == "") {
		alert("por favor ingrese usuario");
		document.formu.usuario.focus();
		return;
	}
	if (clave == "") {
		alert("por favor ingrese clave");
		document.formu.clave.focus();
		return;
	}
	
	document.formu.submit();
}
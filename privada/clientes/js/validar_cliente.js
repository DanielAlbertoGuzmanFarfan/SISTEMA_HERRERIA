"use strict"
function validar(){
	var nombres = document.formu.nombres.value;
	var apellidos = document.formu.apellidos.value;
	var telefono = document.formu.telefono.value;
	var ci = document.formu.ci.value;
	var nit = document.formu.nit.value;

	if (!v1.test(nombres)){
		alert("Los nombres son incorrectos o el campo esta vacio");
		document.formu.nombres.focus();
		return;
	}
	if (!v1.test(apellidos)){
		alert("Los apellidos son incorrectos o el campo esta vacio");
		document.formu.apellidos.focus();
		return;
	}
	if (telefono==""){
		alert("El telefono esta vacio");
		document.formu.telefono.focus();
		return;
	}

	if (ci=="") {
		alert("por favor ingrese el numero de carnet de identidad");
		document.formu.ci.focus();
		return;
	}
	
	document.formu.submit();
}
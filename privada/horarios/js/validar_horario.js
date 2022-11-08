"use strict"
function validar(){
	var id_Personal = document.formu.id_Personal.value;
	var hora_entrada = document.formu.hora_entrada.value;
	var hora_salida = document.formu.hora_salida.value;
	

	if (id_Personal=="") {
		alert("por favor seleccione un personal");
		document.formu.id_Personal.focus();
		return;
	}
	if (hora_entrada == "") {
		alert("por favor ingrese la hora de entrada");
		document.formu.hora_entrada.focus();
		return;
	}
	if (hora_salida == "") {
		alert("por favor ingrese la hora de salida");
		document.formu.hora_salida.focus();
		return;
	}
	
	document.formu.submit();
}
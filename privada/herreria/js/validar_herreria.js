"use strict"
function validar(){
	var Nombre = document.formu.Nombre.value;

	if (Nombre=="") {
		alert("por favor ingrese el nombre");
		document.formu.Nombre.focus();
		return;

	document.formu.submit();
}
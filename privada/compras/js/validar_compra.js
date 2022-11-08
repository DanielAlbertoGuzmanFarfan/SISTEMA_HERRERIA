"use strict"
function validar(){
	var id_Proveedor = document.formu.id_Proveedor.value;
	var monto_compra = document.formu.monto_compra.value;
	var fecha_compra = document.formu.fecha_compra.value;
	

	if (id_Proveedor=="") {
		alert("por favor seleccione un personal");
		document.formu.id_Proveedor.focus();
		return;
	}
	if (monto_compra == "") {
		alert("por favor ingrese la hora de entrada");
		document.formu.monto_compra.focus();
		return;
	}
	if (fecha_compra == "") {
		alert("por favor ingrese la fecha de la compra");
		document.formu.fecha_compra.focus();
		return;
	}
	
	document.formu.submit();
}
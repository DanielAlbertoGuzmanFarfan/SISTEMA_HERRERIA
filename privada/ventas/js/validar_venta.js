"use strict"
function validar(){
	var id_Cliente = document.formu.id_Cliente.value;
	var monto_total = document.formu.monto_total.value;
	var fecha_venta = document.formu.fecha_venta.value;
	

	if (id_Cliente=="") {
		alert("por favor seleccione un cliente");
		document.formu.id_Cliente.focus();
		return;
	}
	if (monto_total == "") {
		alert("por favor ingrese el monto total de la venta");
		document.formu.monto_total.focus();
		return;
	}
	if (fecha_venta == "") {
		alert("por favor ingrese la fecha de la venta");
		document.formu.fecha_venta.focus();
		return;
	}
	
	document.formu.submit();
}
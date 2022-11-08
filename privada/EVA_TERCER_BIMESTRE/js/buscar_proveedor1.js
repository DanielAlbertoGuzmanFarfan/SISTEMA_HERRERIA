"use strict"
function buscar_proveedor(){
var d1,d2,d3, ajax,url,param,contenedor;
contenedor = document.getElementById('producto1');
d1 = document.formu.id_proveedor.value;
d2 =document.formu.descripcion.value;
d3 =document.formu.modelo.value;
ajax = nuevoAjax();
url = "ajax_buscar_proveedor1.php"
param = "id_proveedor="+d1+"&descripcion="+d2+"&modelo="+d3;
ajax.open("POST", url, true);
ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
		contenedor.innerHTML = ajax.responseText;
	}
}
ajax.send(param);
}

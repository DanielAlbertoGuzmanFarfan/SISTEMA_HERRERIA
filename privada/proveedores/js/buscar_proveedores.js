"use strict"
function buscar_proveedores(){
var d1,d2, ajax,url,param,contenedor;
contenedor = document.getElementById('proveedores1');
d1 = document.formu.nombre.value;
d2 =document.formu.telefono.value;
ajax = nuevoAjax();
url = "ajax_buscar_proveedores.php"
param = "nombre="+d1+"&telefono="+d2;
ajax.open("POST", url, true);
ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
		contenedor.innerHTML = ajax.responseText;
	}
}
ajax.send(param);
}

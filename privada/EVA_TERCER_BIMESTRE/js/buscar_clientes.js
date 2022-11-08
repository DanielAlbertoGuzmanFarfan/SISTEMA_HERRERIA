"use strict"
function buscar_cliente(){
var d1,d2,d3, ajax,url,param,contenedor;
contenedor = document.getElementById('vehiculos1');
d1 = document.formu.id_cliente1.value;
d2 =document.formu.nro_placa.value;
d3 =document.formu.modelo.value;
ajax = nuevoAjax();
url = "ajax_buscar_cliente.php"
param = "id_cliente1="+d1+"&nro_placa="+d2+"&modelo="+d3;
ajax.open("POST", url, true);
ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
		contenedor.innerHTML = ajax.responseText;
	}
}
ajax.send(param);
}

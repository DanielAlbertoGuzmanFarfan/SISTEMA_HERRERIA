"use strict"
function buscar_carrera(){
var d1,d2,d3, ajax,url,param,contenedor;
contenedor = document.getElementById('materias1');
d1 = document.formu.materia.value;
d2 =document.formu.alias.value;
d3 =document.formu.id_carrera.value;
ajax = nuevoAjax();
url = "ajax_buscar_carrera.php"
param = "materia="+d1+"&alias="+d2+"&id_carrera="+d3;
ajax.open("POST", url, true);
ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
ajax.onreadystatechange = function(){
	if (ajax.readyState == 4){
		contenedor.innerHTML = ajax.responseText;
	}
}
ajax.send(param);
}

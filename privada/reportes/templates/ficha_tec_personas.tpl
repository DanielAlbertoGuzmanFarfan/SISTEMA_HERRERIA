<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<meta charset="utf-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar(){
			
			var d1,d2, d3, d4, contenedor, ajax, url, param;
			contenedor = document.getElementById('personas1');
			
			d1 = document.formu.paterno.value;
			d2 = document.formu.materno.value;
			d3 = document.formu.nombres.value;
			d4 = document.formu.ci.value;

			ajax = nuevoAjax();
			url = "ajax_buscar_persona.php"
			param = "paterno="+d1+"&materno="+d2+"&nombres="+d3+"&ci="+d4;

			ajax.open("POST",url,true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
				}
			}
			ajax.send(param);
		}
		function buscar_persona(id_persona){
			var d1, ventanaCalendario;
			d1= id_persona;
			//alert(d1);

			ventanaCalendario = window.open("ficha_tec_personas1.php?id_persona=" + d1  , "calendario", "width=600, heigth=550,left=100,top=100, scrollbars=yes, menubars=no, statusbas=NO, status=NO, resizable=YES, location=NO")
		}
	</script>
</head>
<body>
	<div class="titulo_listado">
	<h1>FICHA TECNICA PERSONAS</h1>
</div>
	<center>
	<form action="#" method="post" name="formu">
		<table border="1" class="listado">
			<tr>
			<th>
			<b>Paterno</b><br />
			<input type="text" name="paterno" value="" size="10" onkeyup="buscar()">
			</th>
			<th>
			<b>Materno</b><br>
				<input type="text" name="materno" value="" size="10" onkeyup="buscar()">
			</th>
			<th>
			<b>Nombres</b><br>
				<input type="text" name="nombres" value="" size="10" onkeyup="buscar()">
			</th>
			<th>
			<b>C.I.</b><br>
				<input type="text" name="ci" value="" size="10" onkeyup="buscar()">
			</th>
			</tr>
			</table>
			</form>
		    </center>

	<center>
		<div id="personas1">
		</div>
</body>
</html>

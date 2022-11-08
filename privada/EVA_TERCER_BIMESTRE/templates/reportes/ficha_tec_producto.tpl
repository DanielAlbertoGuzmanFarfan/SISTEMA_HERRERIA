<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<meta charset="utf-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar(){
			
			var d1,d2, d3, d4, contenedor, ajax, url, param;
			contenedor = document.getElementById('proveedor1');
			
			d1 = document.formu.descripcion.value;
			d2 = document.formu.modelo.value;

			ajax = nuevoAjax();
			url = "ajax_buscar_proveedor1.php"
			param = "&descripcion="+d1+"&modelo="+d2;

			ajax.open("POST",url,true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
				}
			}
			ajax.send(param);
		}
		function buscar_proveedor1(id_producto){
			var d1, ventanaCalendario;
			d1= id_producto;
			//alert(d1);

			ventanaCalendario = window.open("ficha_tec_producto1.php?id_producto=" + d1  , "calendario", "width=600, heigth=550,left=100,top=100, scrollbars=yes, menubars=no, statusbas=NO, status=NO, resizable=YES, location=NO")
		}
	</script>
</head>
<body>
	<div class="titulo_listado">
	<h1>FICHA TECNICA PRODUCTO</h1>
</div>
	<center>
	<form action="#" method="post" name="formu">
		<table border="1" class="listado">
			<tr>
			<th>
			<select name="proveedores1">
		  	<option value="">---seleccione---</option>
		  {foreach item=r from=$proveedores1}
		  <option value="{$r.id_proveedor1}">{$r.nombre}</option>
		  {/foreach}
		  </select>
			</th>
			<th>
			<b>Descripcion</b><br>
				<input type="text" name="descripcion" value="" size="10" onkeyup="buscar()">
			</th>
			<th>
			<b>Modelo</b><br>
				<input type="text" name="modelo" value="" size="10" onkeyup="buscar()">
			</th>
			</tr>
			</table>
			</form>
		    </center>

	<center>
		<div id="proveedor1">
		</div>
</body>
</html>

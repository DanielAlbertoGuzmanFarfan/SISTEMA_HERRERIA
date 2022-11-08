<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../{$direc_css}">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_venta.js"></script>
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar(){
			
			var d1, contenedor, url;
			contenedor = document.getElementById('clientes');
			contenedor2 = document.getElementById('cliente_seleccionado');
			contenedor3 = document.getElementById('cliente_insertado');
			
			d1 = document.formu.Nombres.value;
			d2 = document.formu.Apellidos.value;
			d3 = document.formu.Telefono.value;
			d4 = document.formu.Ci.value;

			ajax = nuevoAjax();
			url = "ajax_buscar_cliente.php"
			param = "Nombres="+d1+"&Apellidos="+d2+"&Telefono="+d3+"&Ci="+d4;
			ajax.open("POST",url,true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
					contenedor2.innerHTML = "";
					contenedor3.innerHTML = "";
				}
			}
			ajax.send(param);
		}
		
	</script>
</head>
<body>
	<h1>REGISTAR USUARIO</h1>
	<center>
	<form action="cliente_nuevo1.php" method="post" name="formu">
		<table border="1">
			<tr>
				<th align="rigth">Seleccione Cliente(*)</th>
				<th>:</th>
				<td>
					<table>
						<tr>
							<td>
			<b>Nombres</b><br>
			<input type="text" name="Nombres" value="" size="10" onkeyup="buscar()">
			</td>
			<td>
			<b>Apellidos</b><br>
				<input type="text" name="Apellidos" value="" size="10" onkeyup="buscar()">
			</td>
			<td>
			<b>Telefono</b><br>
				<input type="text" name="Telefono" value="" size="10" onkeyup="buscar()">
			</td>
			<td>
			<b>C.I.</b><br>
				<input type="text" name="Ci" value="" size="10" onkeyup="buscar()">
			</td>
						</tr>
					</table>
				</td>
			</tr>
<tr>
	<td colspan="6">
		<table width="100%">
			<tr>
				<td colspan="3">
					<div id="clientes"></div>					
				</td>
			</tr>		
		</table>
	</td>
</tr>
<tr>
	<td colspan="6">
		<table width="100%">
			<tr>
				<td colspan="3">
					<div id="persona_seleccionado"></div>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td colspan="6">
		<table width="100%">
			<tr>
				<td colspan="3">
					<input type="hidden" name="id_persona">
					<div id="persona_insertada"></div>
				</td>
			</tr>
		</table>
	</td>
</tr>

<tr>
<td align="center" colspan="3">
	<input type="hidden" name="accion" value="">
	<input type="button" value="Aceptar" onclick="validar();">
	<input type="button" value="Cancelar" onclick="javascript.location.href='usuarios.php';">
</td>
</tr>
</table>
<table>
	<tr>
		<td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
	</tr>
</table>
	</form>
	</center>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_venta.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
	  <form action="venta_nuevo1.php" method="post" name="formu">
	  	<h2>REGISTRAR VENTAS</h2>
	  	 <b>Cliente (*)</b>
		  <select name="id_Cliente">
		  	<option value="">---seleccione---</option>
		  {foreach item=r from=$clientes}
		  <option value="{$r.id_Cliente}">{$r.Apellidos} {$r.Nombres}</option>
		  {/foreach}
		  </select>
		  <p>
		  	<input type="text" name="monto_total" size="15" placeholder="Monto_total">(*)
		  </p>
		  <p>
		  	Fecha venta<br><input class="dato" type="date" name="fecha_venta">(*)
		  </p>
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='ventas.php';" class="boton2">
		  </p>
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html>
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
	  <h2>MODIFICAR VENTAS</h2>
	  <b>cliente (*)</b>
		<select name="id_Cliente">
		  {foreach item=r from=$clientes}
		  <option value="{$r.id_Cliente}">{$r.Nombres}</option>
		  {/foreach}
		</select>
      {foreach item=r from=$venta}
		  <p>
		  	<input type="text" name="monto_total" size="15" placeholder="Monto_total" value="{$r.Monto_Total}">(*)
		  </p>
		  <p>
		  	Fecha venta<br><input class="dato" type="date" name="fecha_venta" value="{$r.fecha_Venta}">(*)
		  </p>
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="hidden" name="id_Venta" value="{$r.id_Venta}">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='ventas.php';" class="boton2">
		  </p>
		  {/foreach}
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html>
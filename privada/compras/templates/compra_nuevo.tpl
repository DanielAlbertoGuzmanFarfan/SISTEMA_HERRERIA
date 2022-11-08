<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_compra.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
	  <form action="compra_nuevo1.php" method="post" name="formu">
	  	<h2>REGISTRAR HORARIOS</h2>
	  	 <b>proveedores (*)</b>
		  <select name="id_Proveedor">
		  	<option value="">---seleccione---</option>
		  {foreach item=r from=$proveedores}
		  <option value="{$r.id_Proveedor}">{$r.Nombre}</option>
		  {/foreach}
		  </select>
		  <p>
		  	<input type="text" name="monto_compra" size="15" placeholder="Monto_compra">(*)
		  </p>
		  <p>
		  	Fecha compra<br><input class="dato" type="date" name="fecha_compra">
		  </p>
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='compras.php';" class="boton2">
		  </p>
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html>
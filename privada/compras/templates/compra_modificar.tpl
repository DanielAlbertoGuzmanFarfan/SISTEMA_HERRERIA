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
	  <h2>MODIFICAR COMPRAS</h2>
	  <b>Persona (*)</b>
		<select name="id_Proveedor">
		  {foreach item=r from=$proveedores}
		  <option value="{$r.id_Proveedor}">{$r.Nombre}</option>
		  {/foreach}
		</select>
      {foreach item=r from=$compra}
		   <p>
		  	<input type="text" name="monto_compra" size="15" placeholder="Monto_compra" value="{$r.Monto_Compra}">(*)
		  </p>
		  <p>
		  	Fecha compra<br><input class="dato" type="date" name="fecha_compra" value="{$r.fecha_Compra}">(*)
		  </p>
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="hidden" name="id_Compra" value="{$r.id_Compra}">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='compras.php';" class="boton2">
		  </p>
		  {/foreach}
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html>
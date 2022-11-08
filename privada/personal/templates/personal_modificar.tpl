<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_personal.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
	  <form action="personal_modificar1.php" method="post" name="formu">
		<h2>MODIFICAR PERSONAl</h2>
		{foreach item=r from=$persona}	
		  Fecha inicio<br><input class="dato" type="date" name="fecha_inicio" value="{$r.fecha_Inicio}">(*)
		  <p>
		  	<input type="text" name="nombres" size="15" placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()" value="{$r.Nombres}">(*)
		  </p>
		  <p>
		  	<input type="text" name="apellidos" size="15" placeholder="Apellidos" onkeyup="this.value=this.value.toUpperCase()" value="{$r.Apellidos}">(*) 
		  
		  <p>
		  	<input type="e-mail" name="correo" size="15" placeholder="Correo" onkeyup="this.value=this.value.toUpperCase()" value="{$r.Correo}">
		  </p>
		  <p>
		  	<input type="text" name="direccion" size="15" placeholder="Direccion" onkeyup="this.value=this.value.toUpperCase()" value="{$r.Direccion}">
		  </p>
		  <p>
		  	<input type="text" name="telefono" size="15" placeholder="Telefono" value="{$r.Telefono}">(*)
		  </p>
		  </p>
		  <p>
		  <input type="text" name="ci" size="15" placeholder="Carnet de Idemtidad" value="{$r.Ci}">(*)
		  </p> 
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="hidden" name="id_Personal" value="{$r.id_Personal}">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='personal.php';" class="boton2">
		  </p>
		  {/foreach}
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html>
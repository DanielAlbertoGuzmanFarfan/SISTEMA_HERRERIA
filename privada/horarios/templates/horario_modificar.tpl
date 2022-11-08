<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_horario.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
	 <form action="horario_nuevo1.php" method="post" name="formu">
	  <h2>MODIFICAR HORARIO</h2>
	  <b>Personal (*)</b>
		<select name="id_Personal">
			{foreach item=r from=$persona}
		  <option value="{$r.id_Personal}">{$r.Apellidos} - {$r.Nombres}</option>
		  {/foreach}

		  {foreach item=r from=$personal}
		  <option value="{$r.id_Personal}">{$r.Apellidos} - {$r.Nombres}</option>
		  {/foreach}
		</select>
      {foreach item=r from=$horarios}
		  <p>
		  	<input type="text" name="hora_entrada" size="15" placeholder="Hora_entrada" value="{$r.Hora_Entrada}">(*)
		  </p>
		  <p>
		  	<input type="text" name="hora_salida" size="15" placeholder="Hora_salida" value="{$r.Hora_Salida}">(*)
		  </p>
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="hidden" name="id_Horario" value="{$r.id_Horario}">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='horarios.php';" class="boton2">
		  </p>
		  {/foreach}
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html>
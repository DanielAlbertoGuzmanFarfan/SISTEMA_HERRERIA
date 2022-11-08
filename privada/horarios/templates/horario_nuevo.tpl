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
	  	<h2>REGISTRAR HORARIOS</h2>
	  	 <b>persona (*)</b>
		  <select name="id_Personal">
		  	<option value="">---seleccione---</option>
		  {foreach item=r from=$personal}
		  <option value="{$r.id_Personal}">{$r.Nombres}-{$r.Apellidos}</option>
		  {/foreach}
		  </select>
		  <p>
		  	<input type="text" name="hora_entrada" size="15" placeholder="Hora Entrada">(*)
		  </p>
		  <p>
		  	<input type="text" name="hora_salida" size="15" placeholder="Hora Salida">(*)
		  </p>
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='horarios.php';" class="boton2">
		  </p>
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html>
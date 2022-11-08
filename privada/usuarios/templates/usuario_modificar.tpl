<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_usuario.js"></script>
</head>
<body>
	<h1>MODIFICAR USUSARIO</h1>
	<center>
	 <form action="usuario_modificar1.php" method="post" name="formu">
	 	<table class="listado">
	 		<tr>
	 			<td align="right">Persona (*)</td><td align="top">:</td>
	 			<td>
		<select name="id_persona">
		  {foreach item=r from=$persona}
		  <option value="{$r.id_persona}">{$r.ap} - {$r.am} - {$r.nombres}</option>
		  {/foreach}
		  <!--
		  {foreach item=r from=$personas}
		  <option value="{$r.id_persona}">{$r.ap} - {$r.am} - {$r.nombres}</option>
		  {/foreach}-->
		</select>
	</td>
   </tr>
      {foreach item=r from=$usuario}
      <tr>
          <td>Usuario (*)</th><th>:</th>
          <td><input type="text" name="usuario" value="{$r.usuario1}"> </td>
    </tr>
    <tr>
          <td>Clave (*)</th><th>:</th>
          <td><input type="text" name="clave" value="{$r.clave}"> </td>
    </tr>

		 	<input type="hidden" name="accion" value="">
		 	<input type="hidden" name="id_usuario" value="{$r.usuario}">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='usuarios.php';" class="boton2">
		  </p>
		  {/foreach}
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html>
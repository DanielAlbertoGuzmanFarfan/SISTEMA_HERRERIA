<!DOCTYPE html>
<html lang="esp">

<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta charset="UTF-8">
	{literal}
	<script type="text/javascript">
		function validar(){
			clientes = document.formu.clientes.value;
			if(document.formu.clientes.value ==""){
			alert("Por favor seleccione el clientes");
			document.formu.focus();
			return;
		}
		ventanaCalendario =window.open("rpt_ventas_clientes1.php?clientes="+clientes ,  "calendario","width=600, height-550,left-100,top-100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")

	}
	</script>
	{/literal}
	
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE PERSONAS POR GENERO</h2>
		<form method="post" name="formu">
			<p>
	<b>seleccione Cliente</b>
		  <select name="clientes">
		  	<option value="">---seleccione---</option>
		  	<option value="T">TODO</option>
		  {foreach item=r from=$clientes}
		  <option value="{$r.id_Cliente}">{$r.Nombres}</option>
		  {/foreach}
		  </select>
    </p>
    <p>
		<input type="hidden" name="value">
		<input type="button" value="Aceptar" onclick="validar();" class="boton">
		</p>
	</form>
	</div>
</body>
</html>
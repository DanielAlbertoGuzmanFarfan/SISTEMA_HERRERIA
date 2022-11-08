<!DOCTYPE html>
<html lang="esp">

<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta charset="UTF-8">
	{literal}
	<script type="text/javascript">
		function validar(){
			proveedores1 = document.formu.proveedores1.value;
			if(document.formu.proveedores1.value ==""){
			alert("Por favor seleccione el proveedor");
			document.formu.focus();
			return;
		}
		ventanaCalendario =window.open("rpt_producto1.php?proveedores1="+proveedores1 ,  "calendario","width=600, height-550,left-100,top-100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")

	}
	</script>
	{/literal}
	
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE PRODUCTOS</h2>
		<form method="post" name="formu">
			<p>
	<b>seleccione Proveedor</b>
		  <select name="proveedores1">
		  	<option value="">---seleccione---</option>
		  	<option value="P">TODO</option>
		  {foreach item=r from=$proveedores1}
		  <option value="{$r.id_proveedor1}">{$r.nombre}</option>
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
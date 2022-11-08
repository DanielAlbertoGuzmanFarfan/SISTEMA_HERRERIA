<?php
/* Smarty version 3.1.36, created on 2022-10-13 20:11:18
  from 'C:\wamp64\www\sistema_herreria\privada\EVA_TERCER_BIMESTRE\templates\vehiculo_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_634870e63a7219_81800452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a530a3bc763292c5da12b5047236caaa35c093ca' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\EVA_TERCER_BIMESTRE\\templates\\vehiculo_nuevo.tpl',
      1 => 1665691872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634870e63a7219_81800452 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/validar_vehiculo.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		function buscar(){
			
			var d1, contenedor, url;
			contenedor = document.getElementById('clientes1');
			contenedor2 = document.getElementById('cliente1_seleccionado');
			contenedor3 = document.getElementById('cliente1_insertado');
			
			d1 = document.formu.nombre.value;
			d2 = document.formu.apellidos.value;
			d3 = document.formu.telefono.value;

			ajax = nuevoAjax();
			url = "ajax_buscar_cliente1.php"
			param = "nombre="+d1+"&apellidos="+d2+"&telefono="+d3;
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
		function buscar_cliente1(id_cliente1){
			var d1, contenedor, url;
			contenedor = document.getElementById('cliente1_seleccionado');
			contenedor2 = document.getElementById('clientes1');
			document.formu.id_cliente1.value = id_cliente1;

			d1 = id_cliente1;

			ajax = nuevoAjax();
			url = "ajax_buscar_cliente2.php"
			param = "id_cliente1="+d1;
			ajax.open("POST", url, true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){

				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
					contenedor2.innerHTML = "";
				}
			}
			ajax.send(param);			
		}

		function insertar_cliente1(){

			var d1, contenedor, url;
			contenedor = document.getElementById('cliente1_seleccionado');
			contenedor2 = document.getElementById('clientes1');
			contenedor3 = document.getElementById('cliente1_insertada');
			d1 = document.formu.nombre1.value;
			d2 = document.formu.apellidos1.value;
			d3 = document.formu.telefono1.value;

			

			if (d1 == ""){
				alert("El nombre es incorrecto o el campo esta vacio");
				document.formu.nombre1.focus();
				return;
			}

			if (d2 == ""){
			alert("El apellido es incorrecto o el campo esta vacio");
			document.formu.apellidos1.focus();
			return;
			}
			
			if (d3 == ""){
			alert("El telefono esta vacio");
			document.formu.telefono1.focus();
			return;
			}
			ajax = nuevoAjax();
			url = "ajax_inserta_cliente.php";
			
			param = "nombre1="+d1+"&apellidos1="+d2+"&telefono1="+d3;
          
			
			ajax.open("POST",url,true);

			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = "";
					contenedor2.innerHTML = "";
					contenedor3.innerHTML = ajax.responseText;
				}
			}
			ajax.send(param);
		}
	<?php echo '</script'; ?>
>
</head>
<body>
	<h1>REGISTAR VEHICULO</h1>
	<center>
	<form action="vehiculo_nuevo1.php" method="post" name="formu">
		<table border="1">
			<tr>
				<th align="rigth">Seleccione Cliente(*)</th>
				<th>:</th>
				<td>
					<table>
							<input type="hidden" name="accion" value="id_cliente1">
						<tr>
							<td>
			<b>Nombres</b><br>
				<input type="text" name="nombre" value="" size="10" onkeyup="buscar()">
			</td>
			<td>
			<b>Apellidos</b><br>
				<input type="text" name="apellidos" value="" size="10" onkeyup="buscar()">
			</td>
			<td>
			<b>Telefono</b><br>
				<input type="text" name="telefono" value="" size="10" onkeyup="buscar()">
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
					<div id="clientes1"></div>					
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
					<div id="cliente1_seleccionado"></div>
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
					<input type="hidden" name="id_cliente1">
					<div id="cliente1_insertada"></div>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<th align="rigth">Placa(*)</th>
	<th>:</th>
	<td><input type="text" name="nro_placa"></td>
</tr>
<tr>
	<th align="rigth">Modelo(*)</th>
	<th>:</th>
	<td><input type="text" name="modelo"></td>
</tr>
<tr>
<td align="center" colspan="3">
	<input type="hidden" name="accion" value="id_cliente1">
	<input type="submit" value="Aceptar" >
	<input type="button" value="Cancelar" onclick="javascript.location.href='vehiculos.php';">
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
<?php }
}

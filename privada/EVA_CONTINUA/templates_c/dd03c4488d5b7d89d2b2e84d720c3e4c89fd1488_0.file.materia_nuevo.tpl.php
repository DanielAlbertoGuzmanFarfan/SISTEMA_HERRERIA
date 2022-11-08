<?php
/* Smarty version 3.1.36, created on 2022-09-29 19:59:57
  from 'C:\wamp64\www\sistema_herreria\privada\EVA_CONTINUA\templates\materia_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6335f93d6f4020_66371681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd03c4488d5b7d89d2b2e84d720c3e4c89fd1488' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\EVA_CONTINUA\\templates\\materia_nuevo.tpl',
      1 => 1663280588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6335f93d6f4020_66371681 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/validar_materia.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		function buscar(){
			
			var d1, contenedor, url;
			contenedor = document.getElementById('carreras');
			contenedor2 = document.getElementById('carrera_seleccionado');
			contenedor3 = document.getElementById('carrera_insertado');
			
			d1 = document.formu.carrera.value;
			d2 = document.formu.direccion.value;

			ajax = nuevoAjax();
			url = "ajax_buscar_carrera.php"
			param = "carrera="+d1+"&direccion="+d2;
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
		function buscar_carrera(id_carrera){
			var d1, contenedor, url;
			contenedor = document.getElementById('carrera_seleccionado');
			contenedor2 = document.getElementById('carreras');
			document.formu.id_carrera.value = id_carrera;

			d1 = id_carrera;

			ajax = nuevoAjax();
			url = "ajax_buscar_carrera1.php"
			param = "id_carrera="+d1;
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

		function insertar_carrera(){

			var d1, contenedor, url;
			contenedor = document.getElementById('carrera_seleccionado');
			contenedor2 = document.getElementById('carreras');
			contenedor3 = document.getElementById('carrera_insertada');
			d1 = document.formu.carrera1.value;
			d2 = document.formu.direccion1.value;
			d3 = document.formu.telefono1.value;
			d4 = document.formu.grado_academico1.value;
			d5 = document.formu.descripcion1.value;
			d6 = document.formu.duracion1.value;
			
			

			if (d1 == ""){
				alert("La carrera esta vacio");
				document.formu.carrera1.focus();
				return;
			}

			if (d2 == ""){
				alert("Por favor introduzca su direccion");
				document.formu.direccion1.focus();
				return;
			}


			ajax = nuevoAjax();
			url = "ajax_inserta_carrera.php";
			
			param = "carrera1="+d1+"&direccion1="+d2+"&telefono1="+d3+"&grado_academico1="+d4+"&descripcion1="+d5+"&duracion1="+d6;
          
			
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
	<h1>REGISTAR MATERIA</h1>
	<center>
	<form action="materia_nuevo1.php" method="post" name="formu">
		<table border="1">
			<tr>
				<th align="rigth">Seleccione Carrera(*)</th>
				<th>:</th>
				<td>
					<table>
						<tr>
							<td>
			<b>Carrera</b><br>
			<input type="text" name="carrera" value="" size="10" onkeyup="buscar()">
			</td>
			<td>
			<b>Direccion</b><br>
				<input type="text" name="direccion" value="" size="10" onkeyup="buscar()">
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
					<div id="carreras"></div>					
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
					<div id="carrera_seleccionado"></div>
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
					<input type="hidden" name="id_carrera">
					<div id="carrera_insertada"></div>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<th align="rigth">Materia(*)</th>
	<th>:</th>
	<td><input type="text" name="materia"></td>
</tr>
<tr>
	<th align="rigth">Alias(*)</th>
	<th>:</th>
	<td><input type="text" name="alias"></td>
</tr>
<tr>
	<th align="rigth">Nivel(*)</th>
	<th>:</th>
	<td><input type="text" name="nivel"></td>
</tr>
<tr>
<td align="center" colspan="3">
	<input type="hidden" name="accion" value="">
	<input type="button" value="Aceptar" onclick="validar();">
	<input type="button" value="Cancelar" onclick="javascript.location.href='materias.php';">
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
</html><?php }
}

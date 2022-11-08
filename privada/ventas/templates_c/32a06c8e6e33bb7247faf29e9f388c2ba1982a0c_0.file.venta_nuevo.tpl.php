<?php
/* Smarty version 3.1.36, created on 2022-09-08 19:26:03
  from 'C:\wamp64\www\sistema_herreria\privada\ventas\templates\venta_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631a41cbd91f47_22742429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32a06c8e6e33bb7247faf29e9f388c2ba1982a0c' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\ventas\\templates\\venta_nuevo.tpl',
      1 => 1662256323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631a41cbd91f47_22742429 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_venta.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		function buscar(){
			
			var d1, contenedor, url;
			contenedor = document.getElementById('clientes');
			contenedor2 = document.getElementById('cliente_seleccionado');
			contenedor3 = document.getElementById('cliente_insertado');
			
			d1 = document.formu.Nombres.value;
			d2 = document.formu.Apellidos.value;
			d3 = document.formu.Telefono.value;
			d4 = document.formu.Ci.value;

			ajax = nuevoAjax();
			url = "ajax_buscar_cliente.php"
			param = "Nombres="+d1+"&Apellidos="+d2+"&Telefono="+d3+"&Ci="+d4;
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
		
	<?php echo '</script'; ?>
>
</head>
<body>
	<h1>REGISTAR USUARIO</h1>
	<center>
	<form action="cliente_nuevo1.php" method="post" name="formu">
		<table border="1">
			<tr>
				<th align="rigth">Seleccione Cliente(*)</th>
				<th>:</th>
				<td>
					<table>
						<tr>
							<td>
			<b>Nombres</b><br>
			<input type="text" name="Nombres" value="" size="10" onkeyup="buscar()">
			</td>
			<td>
			<b>Apellidos</b><br>
				<input type="text" name="Apellidos" value="" size="10" onkeyup="buscar()">
			</td>
			<td>
			<b>Telefono</b><br>
				<input type="text" name="Telefono" value="" size="10" onkeyup="buscar()">
			</td>
			<td>
			<b>C.I.</b><br>
				<input type="text" name="Ci" value="" size="10" onkeyup="buscar()">
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
					<div id="clientes"></div>					
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
					<div id="persona_seleccionado"></div>
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
					<input type="hidden" name="id_persona">
					<div id="persona_insertada"></div>
				</td>
			</tr>
		</table>
	</td>
</tr>

<tr>
<td align="center" colspan="3">
	<input type="hidden" name="accion" value="">
	<input type="button" value="Aceptar" onclick="validar();">
	<input type="button" value="Cancelar" onclick="javascript.location.href='usuarios.php';">
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




<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_venta.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
	  <form action="venta_nuevo1.php" method="post" name="formu">
	  	<h2>REGISTRAR VENTAS</h2>
	  	 <b>Cliente (*)</b>
		  <select name="id_Cliente">
		  	<option value="">---seleccione---</option>
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		  <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Cliente'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Apellidos'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['Nombres'];?>
</option>
		  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		  </select>
		  <p>
		  	<input type="text" name="monto_total" size="15" placeholder="Monto_total">(*)
		  </p>
		  <p>
		  	Fecha venta<br><input class="dato" type="date" name="fecha_venta">(*)
		  </p>
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='ventas.php';" class="boton2">
		  </p>
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html><?php }
}

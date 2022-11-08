<?php
/* Smarty version 3.1.36, created on 2022-07-07 21:00:44
  from 'C:\wamp64\www\sistema_herreria\privada\ventas\templates\venta_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62c7497c013311_26965538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42ec4bedcdba93d426a7f3ae18a60f18558754da' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\ventas\\templates\\venta_modificar.tpl',
      1 => 1657147536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c7497c013311_26965538 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
	  <h2>MODIFICAR VENTAS</h2>
	  <b>cliente (*)</b>
		<select name="id_Cliente">
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		  <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Cliente'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nombres'];?>
</option>
		  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['venta']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		  <p>
		  	<input type="text" name="monto_total" size="15" placeholder="Monto_total" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Monto_Total'];?>
">(*)
		  </p>
		  <p>
		  	Fecha venta<br><input class="dato" type="date" name="fecha_venta" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_Venta'];?>
">(*)
		  </p>
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="hidden" name="id_Venta" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Venta'];?>
">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='ventas.php';" class="boton2">
		  </p>
		  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html><?php }
}

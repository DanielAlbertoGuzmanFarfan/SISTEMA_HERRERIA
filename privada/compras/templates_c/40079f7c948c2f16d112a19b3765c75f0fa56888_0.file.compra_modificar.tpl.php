<?php
/* Smarty version 3.1.36, created on 2022-07-02 20:05:39
  from 'C:\wamp\www\sistema_herreria\privada\compras\templates\compra_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62c0dd53766a13_62090818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40079f7c948c2f16d112a19b3765c75f0fa56888' => 
    array (
      0 => 'C:\\wamp\\www\\sistema_herreria\\privada\\compras\\templates\\compra_modificar.tpl',
      1 => 1654921738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c0dd53766a13_62090818 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_compra.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
	 <form action="compra_nuevo1.php" method="post" name="formu">
	  <h2>MODIFICAR COMPRAS</h2>
	  <b>Persona (*)</b>
		<select name="id_Proveedor">
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proveedores']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		  <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Proveedor'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nombre'];?>
</option>
		  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compra']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		   <p>
		  	<input type="text" name="monto_compra" size="15" placeholder="Monto_compra" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Monto_Compra'];?>
">(*)
		  </p>
		  <p>
		  	Fecha compra<br><input class="dato" type="date" name="fecha_compra" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_Compra'];?>
">(*)
		  </p>
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="hidden" name="id_Compra" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Compra'];?>
">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='compras.php';" class="boton2">
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

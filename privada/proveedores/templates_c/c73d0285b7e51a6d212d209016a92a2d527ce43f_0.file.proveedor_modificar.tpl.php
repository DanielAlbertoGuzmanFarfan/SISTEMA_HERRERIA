<?php
/* Smarty version 3.1.36, created on 2022-08-11 19:51:43
  from 'C:\wamp64\www\sistema_herreria\privada\proveedores\templates\proveedor_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62f55dcfd5bc22_62157713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c73d0285b7e51a6d212d209016a92a2d527ce43f' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\proveedores\\templates\\proveedor_modificar.tpl',
      1 => 1654879860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f55dcfd5bc22_62157713 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_proveedor.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
	  <form action="proveedor_modificar1.php" method="post" name="formu">
		<h2>MODIFICAR PROVEEDORES</h2>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['persona']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>	
		  	<input type="text" name="nombre" size="15" placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Nombre'];?>
">(*)
		  <p>
		  	<input type="text" name="direccion" size="15" placeholder="Direccion" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Direccion'];?>
">
		  </p>
		  <p>
		  	<input type="e-mail" name="correo" size="15" placeholder="Correo" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Correo'];?>
">
		  </p>
		  
		  <p>
		  	<input type="text" name="telefono" size="15" placeholder="Telefono" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Telefono'];?>
">(*)
		  </p> 
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="hidden" name="id_Proveedor" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Proveedor'];?>
">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='proveedores.php';" class="boton2">
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

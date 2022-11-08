<?php
/* Smarty version 3.1.36, created on 2022-07-07 20:57:47
  from 'C:\wamp64\www\sistema_herreria\privada\clientes\templates\cliente_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62c748cb99ab11_28073980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '067877b4023f4ce5e24d936f9027a09311fac3af' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\clientes\\templates\\cliente_modificar.tpl',
      1 => 1657143876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c748cb99ab11_28073980 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_cliente.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
	  <form action="cliente_modificar1.php" method="post" name="formu">
		<h2>MODIFICAR CLIENTE</h2>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['persona']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>	

		  	<input type="text" name="nombres" size="15" placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()">(*)
		  <p>
		  	<input type="text" name="apellidos" size="15" placeholder="Apellidos" onkeyup="this.value=this.value.toUpperCase()">(*) 
		  </p>
		  <p>
		  	<input type="text" name="telefono" size="15" placeholder="Telefono">(*)
		  </p>
		  <p>
		  <input type="text" name="ci" size="15" placeholder="Carnet de Idemtidad">(*)
		  </p> 
		  <p>
		  	<input type="e-mail" name="correo" size="15" placeholder="Correo" onkeyup="this.value=this.value.toUpperCase()">
		  </p>
		  <p>
		  	<input type="text" name="nit" size="15" placeholder="Nit" onkeyup="this.value=this.value.toUpperCase()">
		  </p> 
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="hidden" name="id_Cliente" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Cliente'];?>
">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='clientes.php';" class="boton2">
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

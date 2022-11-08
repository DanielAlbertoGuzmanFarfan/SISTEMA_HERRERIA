<?php
/* Smarty version 3.1.36, created on 2022-08-11 20:05:39
  from 'C:\wamp64\www\sistema_herreria\privada\personas\templates\persona_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62f56113de91c4_70494794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b64c3982bebbb5a1c4288d27bc6002ea15baa5f8' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\personas\\templates\\persona_modificar.tpl',
      1 => 1654209516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f56113de91c4_70494794 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_persona.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
	  <form action="persona_modificar1.php" method="post" name="formu">
		<h2>MODIFICAR PERSONA</h2>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['persona']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>	
		  <input type="text" name="ci" size="15" placeholder="Carnet de Idemtidad" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
">(*)
		  <p>
		  	<input type="text" name="nombres" size="15" placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
">(*)
		  </p>
		  <p>
		  	<input type="text" name="ap" size="15" placeholder="Apellido Paterno" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
">(*)
		  </p>
		  <p>
		  	<input type="text" name="am" size="15" placeholder="Apellido Materno" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
">(*)
		  </p>
		  <p>
		  	<input type="text" name="direccion" size="15" placeholder="Direccion" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
">
		  </p>
		  <p>
		  	<input type="text" name="telefono" size="15" placeholder="Telefono" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telef'];?>
">
		  </p>
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="hidden" name="id_persona" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='personas.php';" class="boton2">
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

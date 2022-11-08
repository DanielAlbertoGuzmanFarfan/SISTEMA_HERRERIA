<?php
/* Smarty version 3.1.36, created on 2022-09-03 20:33:43
  from 'C:\wamp\www\sistema_herreria\privada\usuarios\templates\usuario_modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6313f267b40ad3_54944324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '893d8d2598fead53522919efa0ca707db6724066' => 
    array (
      0 => 'C:\\wamp\\www\\sistema_herreria\\privada\\usuarios\\templates\\usuario_modificar.tpl',
      1 => 1662251128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6313f267b40ad3_54944324 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_usuario.js"><?php echo '</script'; ?>
>
</head>
<body>
	<h1>MODIFICAR USUSARIO</h1>
	<center>
	 <form action="usuario_modificar1.php" method="post" name="formu">
	 	<table class="listado">
	 		<tr>
	 			<td align="right">Persona (*)</td><td align="top">:</td>
	 			<td>
		<select name="id_persona">
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['persona']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		  <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</option>
		  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		  <!--
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		  <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</option>
		  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>-->
		</select>
	</td>
   </tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
      <tr>
          <td>Usuario (*)</th><th>:</th>
          <td><input type="text" name="usuario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario1'];?>
"> </td>
    </tr>
    <tr>
          <td>Clave (*)</th><th>:</th>
          <td><input type="text" name="clave" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['clave'];?>
"> </td>
    </tr>

		 	<input type="hidden" name="accion" value="">
		 	<input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario'];?>
">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='usuarios.php';" class="boton2">
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

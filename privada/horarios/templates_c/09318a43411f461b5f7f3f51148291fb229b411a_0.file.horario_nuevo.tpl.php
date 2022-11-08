<?php
/* Smarty version 3.1.36, created on 2022-09-08 20:41:09
  from 'C:\wamp64\www\sistema_herreria\privada\horarios\templates\horario_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631a5365e8dd24_44945305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09318a43411f461b5f7f3f51148291fb229b411a' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\horarios\\templates\\horario_nuevo.tpl',
      1 => 1653627956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631a5365e8dd24_44945305 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_horario.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
	  <form action="horario_nuevo1.php" method="post" name="formu">
	  	<h2>REGISTRAR HORARIOS</h2>
	  	 <b>persona (*)</b>
		  <select name="id_Personal">
		  	<option value="">---seleccione---</option>
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personal']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		  <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Personal'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nombres'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['Apellidos'];?>
</option>
		  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		  </select>
		  <p>
		  	<input type="text" name="hora_entrada" size="15" placeholder="Hora Entrada">(*)
		  </p>
		  <p>
		  	<input type="text" name="hora_salida" size="15" placeholder="Hora Salida">(*)
		  </p>
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='horarios.php';" class="boton2">
		  </p>
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html><?php }
}

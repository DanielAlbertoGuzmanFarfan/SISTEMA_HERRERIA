<?php
/* Smarty version 3.1.36, created on 2022-09-08 19:23:55
  from 'C:\wamp64\www\sistema_herreria\privada\reportes\templates\rpt_ventas_clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631a414beef715_82058158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba9e44e02be37634d3bf9e65a287edd3a9370e6a' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\reportes\\templates\\rpt_ventas_clientes.tpl',
      1 => 1661919413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631a414beef715_82058158 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta charset="UTF-8">
	
	<?php echo '<script'; ?>
 type="text/javascript">
		function validar(){
			clientes = document.formu.clientes.value;
			if(document.formu.clientes.value ==""){
			alert("Por favor seleccione el clientes");
			document.formu.focus();
			return;
		}
		ventanaCalendario =window.open("rpt_ventas_clientes1.php?clientes="+clientes ,  "calendario","width=600, height-550,left-100,top-100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")

	}
	<?php echo '</script'; ?>
>
	
	
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE PERSONAS POR GENERO</h2>
		<form method="post" name="formu">
			<p>
	<b>seleccione Cliente</b>
		  <select name="clientes">
		  	<option value="">---seleccione---</option>
		  	<option value="T">TODO</option>
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
    </p>
    <p>
		<input type="hidden" name="value">
		<input type="button" value="Aceptar" onclick="validar();" class="boton">
		</p>
	</form>
	</div>
</body>
</html><?php }
}

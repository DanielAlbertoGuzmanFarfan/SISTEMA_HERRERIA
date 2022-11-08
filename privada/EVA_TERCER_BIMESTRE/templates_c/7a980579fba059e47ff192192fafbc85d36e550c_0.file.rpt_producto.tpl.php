<?php
/* Smarty version 3.1.36, created on 2022-09-27 19:41:16
  from 'C:\wamp64\www\sistema_herreria\privada\EVA_TERCER_BIMESTRE\templates\rpt_producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_633351dc77c5d3_60922562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a980579fba059e47ff192192fafbc85d36e550c' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\EVA_TERCER_BIMESTRE\\templates\\rpt_producto.tpl',
      1 => 1664307670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633351dc77c5d3_60922562 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta charset="UTF-8">
	
	<?php echo '<script'; ?>
 type="text/javascript">
		function validar(){
			proveedores1 = document.formu.proveedores1.value;
			if(document.formu.proveedores1.value ==""){
			alert("Por favor seleccione el proveedor");
			document.formu.focus();
			return;
		}
		ventanaCalendario =window.open("rpt_producto1.php?proveedores1="+proveedores1 ,  "calendario","width=600, height-550,left-100,top-100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")

	}
	<?php echo '</script'; ?>
>
	
	
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE PRODUCTOS</h2>
		<form method="post" name="formu">
			<p>
	<b>seleccione Proveedor</b>
		  <select name="proveedores1">
		  	<option value="">---seleccione---</option>
		  	<option value="P">TODO</option>
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proveedores1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		  <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_proveedor1'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
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

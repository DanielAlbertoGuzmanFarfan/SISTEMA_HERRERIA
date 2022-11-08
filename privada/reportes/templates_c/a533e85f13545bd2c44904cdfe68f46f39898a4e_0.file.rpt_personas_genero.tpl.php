<?php
/* Smarty version 3.1.36, created on 2022-09-08 19:23:37
  from 'C:\wamp64\www\sistema_herreria\privada\reportes\templates\rpt_personas_genero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631a41393831a6_17282755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a533e85f13545bd2c44904cdfe68f46f39898a4e' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\reportes\\templates\\rpt_personas_genero.tpl',
      1 => 1661907178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631a41393831a6_17282755 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta charset="UTF-8">
	
	<?php echo '<script'; ?>
 type="text/javascript">
		function validar(){
			genero = document.formu.genero.value;
			if(document.formu.genero.value ==""){
			alert("Por favor seleccione el genero");
			document.formu.focus();
			return;
		}
		ventanaCalendario =window.open("rpt_personas_genero1.php?genero="+genero ,  "calendario","width=600, height-550,left-100,top-100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")

	}
	<?php echo '</script'; ?>
>
	
	
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE PERSONAS POR GENERO</h2>
		<form method="post" name="formu">
			<p>
	<b>seleccione genero</b>
	<select name="genero">
		<option value="">--Seleccione--</option>
		<option value="T">Todos</option>
		<option value="F">Femenino</option>
		<option value="M">Masculino</option>
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

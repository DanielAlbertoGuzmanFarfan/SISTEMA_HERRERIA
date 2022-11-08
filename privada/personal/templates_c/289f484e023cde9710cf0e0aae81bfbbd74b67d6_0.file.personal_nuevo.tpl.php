<?php
/* Smarty version 3.1.36, created on 2022-07-03 01:05:02
  from 'C:\wamp\www\sistema_herreria\privada\personal\templates\personal_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62c0cf1ec0fb62_93388017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '289f484e023cde9710cf0e0aae81bfbbd74b67d6' => 
    array (
      0 => 'C:\\wamp\\www\\sistema_herreria\\privada\\personal\\templates\\personal_nuevo.tpl',
      1 => 1653622888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c0cf1ec0fb62_93388017 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_personal.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
	  <form action="personal_nuevo1.php" method="post" name="formu">
	  	<h2>REGISTRAR PERSONAL</h2>
		  	Fecha inicio<br><input class="dato" type="date" name="fecha_inicio">(*)
		  <p>
		  	<input type="text" name="nombres" size="15" placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()">(*)
		  </p>
		  <p>
		  	<input type="text" name="apellidos" size="15" placeholder="Apellidos" onkeyup="this.value=this.value.toUpperCase()">(*) 
		  
		  <p>
		  	<input type="e-mail" name="correo" size="15" placeholder="Correo" onkeyup="this.value=this.value.toUpperCase()">
		  </p>
		  <p>
		  	<input type="text" name="direccion" size="15" placeholder="Direccion" onkeyup="this.value=this.value.toUpperCase()">
		  </p>
		  <p>
		  	<input type="text" name="telefono" size="15" placeholder="Telefono">(*)
		  </p>
		  </p>
		  <p>
		  <input type="text" name="ci" size="15" placeholder="Carnet de Idemtidad">(*)
		  </p> 
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='personal.php';" class="boton2">
		  </p>
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html><?php }
}

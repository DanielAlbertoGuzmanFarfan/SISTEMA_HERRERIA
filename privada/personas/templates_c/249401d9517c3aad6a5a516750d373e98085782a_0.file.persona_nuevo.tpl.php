<?php
/* Smarty version 3.1.36, created on 2022-09-03 20:08:56
  from 'C:\wamp\www\sistema_herreria\privada\personas\templates\persona_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6313ec98514401_97742217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '249401d9517c3aad6a5a516750d373e98085782a' => 
    array (
      0 => 'C:\\wamp\\www\\sistema_herreria\\privada\\personas\\templates\\persona_nuevo.tpl',
      1 => 1653099648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6313ec98514401_97742217 (Smarty_Internal_Template $_smarty_tpl) {
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
	  <form action="persona_nuevo1.php" method="post" name="formu">
	  	<h2>REGISTRAR PERSONA</h2>
		  <input type="text" name="ci" size="15" placeholder="Carnet de Idemtidad">(*)
		  <p>
		  	<input type="text" name="nombres" size="15" placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()">(*)
		  </p>
		  <p>
		  	<input type="text" name="ap" size="15" placeholder="Apellido Paterno" onkeyup="this.value=this.value.toUpperCase()">(*)
		  </p>
		  <p>
		  	<input type="text" name="am" size="15" placeholder="Apellido Materno" onkeyup="this.value=this.value.toUpperCase()">(*)
		  </p>
		  <p>
		  	<input type="text" name="direccion" size="15" placeholder="Direccion" onkeyup="this.value=this.value.toUpperCase()">
		  </p>
		  <p>
		  	<input type="text" name="telefono" size="15" placeholder="Telefono">
		  </p>
		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='personas.php';" class="boton2">
		  </p>
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html><?php }
}

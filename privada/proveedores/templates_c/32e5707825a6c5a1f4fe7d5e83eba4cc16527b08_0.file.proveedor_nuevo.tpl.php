<?php
/* Smarty version 3.1.36, created on 2022-07-02 20:16:03
  from 'C:\wamp\www\sistema_herreria\privada\proveedores\templates\proveedor_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62c0dfc37f4682_66168002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32e5707825a6c5a1f4fe7d5e83eba4cc16527b08' => 
    array (
      0 => 'C:\\wamp\\www\\sistema_herreria\\privada\\proveedores\\templates\\proveedor_nuevo.tpl',
      1 => 1654896010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c0dfc37f4682_66168002 (Smarty_Internal_Template $_smarty_tpl) {
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
	  <form action="proveedor_nuevo1.php" method="post" name="formu">
	  	<h2>REGISTRAR PROVEEDOR</h2>
		  
		  	<input type="text" name="nombre" size="15" placeholder="Nombre" onkeyup="this.value=this.value.toUpperCase()">(*)
		  
		  <p>
		  	<input type="text" name="direccion" size="15" placeholder="Direccion" onkeyup="this.value=this.value.toUpperCase()">
		  </p>
		  <p>
		  	<input type="e-mail" name="correo" size="15" placeholder="Correo" onkeyup="this.value=this.value.toUpperCase()">
		  </p>	  
		  <p>
		  	<input type="text" name="telefono" size="15" placeholder="Telefono">(*)
		  </p>

		  <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton2">
		 	<input type="button" value="Cancelar" onclick="javascript:location.href='proveedores.php';" class="boton2">
		  </p>
		  <p><b>(*)Campos Obligatorios</b></p>
		</form>
	  </div>
   </body>
</html><?php }
}

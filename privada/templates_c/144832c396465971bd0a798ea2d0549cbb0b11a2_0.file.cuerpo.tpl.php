<?php
/* Smarty version 3.1.36, created on 2022-07-03 00:48:25
  from 'C:\wamp\www\sistema_herreria\privada\templates\cuerpo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62c0cb39d08323_42373632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '144832c396465971bd0a798ea2d0549cbb0b11a2' => 
    array (
      0 => 'C:\\wamp\\www\\sistema_herreria\\privada\\templates\\cuerpo.tpl',
      1 => 1652573060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c0cb39d08323_42373632 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
	
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">

</head>
<body>
	<form action="claves/" method="post" target="cuerpo">
		<?php if ($_smarty_tpl->tpl_vars['nick']->value == '') {?>
		<div class="formu_ingreso">
			<p><h2>Ingresar al Sistema</h2></p>
			<p><h2>Login:</h2><input type="text" name="nick" size="11" value="" class="limpiar"></p>
			<p><h2>Clave:</h2><input type="password" name="password" size="11" value="" class="limpiar"></p>
			<input type="submit" name="accion" value="Ingresar" size="5" class="boton">
		</div>
		<?php }?>
		
	</form>
  </body>
</html><?php }
}

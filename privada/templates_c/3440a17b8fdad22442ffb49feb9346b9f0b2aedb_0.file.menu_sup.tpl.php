<?php
/* Smarty version 3.1.36, created on 2022-06-28 20:54:50
  from 'C:\wamp64\www\sistema_herreria\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62bb6a9adbb1c0_78796923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3440a17b8fdad22442ffb49feb9346b9f0b2aedb' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\templates\\menu_sup.tpl',
      1 => 1649379368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bb6a9adbb1c0_78796923 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
	
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">

  </head>
  <body>
	<div class="cabecera">
	  <img src="../../sistema_herreria/imagenes/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="5%">
	<div class="titulo">
	HERRERIA "<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
"
	</div>
	<div class="usuario">
	Usuario:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['usuario1'];?>
</b>
	Rol:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['rol'];?>
</b>
    </div>
   </div>
  </body>
</html>
<?php }
}

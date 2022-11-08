<?php
/* Smarty version 3.1.36, created on 2022-06-30 17:40:43
  from 'C:\wamp64\www\sistema_herreria\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62bde01b81ea43_09059287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a549865490ea754b33a9015f119d73921fb9f8fa' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\claves\\templates\\index.tpl',
      1 => 1650153644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bde01b81ea43_09059287 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <head>
	
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript">
		function refrescar(){
			var p = window.parent;
			p.location.href='../';
		}
	<?php echo '</script'; ?>
>


  </head>
  <body ONLOAD="self.setTimeout('refrescar()',2000);">
  	<center>
  		<h1><?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>
</h1>
  		<h3 style="color:red;"><?php echo $_smarty_tpl->tpl_vars['nom_completo']->value;?>
</h3>
  		<br>
  		<h1><?php echo $_smarty_tpl->tpl_vars['mensage1']->value;?>
</h1>
  	</center>
  </body>
</html><?php }
}

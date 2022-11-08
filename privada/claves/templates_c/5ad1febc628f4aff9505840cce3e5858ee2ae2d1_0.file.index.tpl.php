<?php
/* Smarty version 3.1.36, created on 2022-07-03 00:48:28
  from 'C:\wamp\www\sistema_herreria\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62c0cb3c5508f3_18428827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ad1febc628f4aff9505840cce3e5858ee2ae2d1' => 
    array (
      0 => 'C:\\wamp\\www\\sistema_herreria\\privada\\claves\\templates\\index.tpl',
      1 => 1650171644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c0cb3c5508f3_18428827 (Smarty_Internal_Template $_smarty_tpl) {
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

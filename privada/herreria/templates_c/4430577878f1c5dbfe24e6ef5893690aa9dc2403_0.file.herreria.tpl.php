<?php
/* Smarty version 3.1.36, created on 2022-08-04 20:37:38
  from 'C:\wamp64\www\sistema_herreria\privada\herreria\templates\herreria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62ec2e124b4e47_50434337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4430577878f1c5dbfe24e6ef5893690aa9dc2403' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\herreria\\templates\\herreria.tpl',
      1 => 1659645380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ec2e124b4e47_50434337 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_herreria.js"><?php echo '</script'; ?>
>
</head>
<body>
	<br>
  <center>
	<h1>HERRERIA</h1>
	 <form action="herreria1.php" method="post" name="formu" enctype="multipart/form-data">
	 	<table border="1">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['herreria']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<th>Nombre (*)</th><th>:</th>
		  <td><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Nombre'];?>
"></td>
		  </tr>
		  <tr>
				<th align="right">Direccion (*)</th><th>:</th>
		  <td><input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
"></td>
		  </tr>
		  <tr>
				<th align="right">Correo (*)</th><th>:</th>
		  <td><input type="e-mail" name="Correo" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['correo'];?>
"></td>
		  </tr>
		  <tr>
				<th align="right">Telefono (*)</th><th>:</th>
		  <td><input type="text" name="Telefono" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
"></td>
		  </tr>
		  <tr>
		  	<th>logo(*)</th><th>:</th>
		  	<td>
		  
		 	   <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
		 	   <input type="file" name="logo">
		 	   <input type="hidden" name="logo1" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['logo'];?>
">
		 	   <br><b><?php echo $_smarty_tpl->tpl_vars['r']->value['logo'];?>
</b>
		 	 </td>
		 	</th>
		 <tr>
		 	<td align="center" colspan="3">
		 		<input type="hidden" name="accion" value=""="">
		 	  <input type="hidden" name="id_Herreria" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Herreria'];?>
">
		 	  <input type="button" value="Aceptar" onclick="validar();">
		 	</td>
		 </tr>
		  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
		<table>
			<tr>
				<td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
			</tr>
		</table>
	</form>
</center>

</body>
</html><?php }
}

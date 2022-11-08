<?php
/* Smarty version 3.1.36, created on 2022-09-08 19:23:51
  from 'C:\wamp64\www\sistema_herreria\privada\reportes\templates\personal_horarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631a4147ba0b97_04579987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f08327f1f02f8efd7d29e76a587824f3d5001e99' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\reportes\\templates\\personal_horarios.tpl',
      1 => 1657241440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631a4147ba0b97_04579987 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<?php echo '<script'; ?>
 type="text/javascript">
		var ventanaCalendario=false
		function imprimir(){
			ventanaCalendario =window.open("personal_horarios1.php" , "calendario","width=600, height-550,left-100,top-100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
		}
	<?php echo '</script'; ?>
>
	
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td align="center"><h1>PERSONAL_HORARIOS</h1></td>
		</tr>
	</table>
	<br>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>PERSONAL</th><th>HORARIOS</th>
			</tr>
				<?php $_smarty_tpl->_assignInScope('b', "1");?>
	            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personal_horarios']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
	            <tr>
	            	<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['Nombres'];
echo $_smarty_tpl->tpl_vars['r']->value['Apellidos'];?>
</td>
				    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['Hora_Entrada'];?>
 / <?php echo $_smarty_tpl->tpl_vars['r']->value['Hora_Salida'];?>
</td>
				   <?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				    
	            </tr>
	            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
		<br><br>
		<h2>
			<input type="radio" name="seleccionar" onclick="javascript:imprimir()">Imprimir
		</h2>
	</center>
</body>
</html><?php }
}

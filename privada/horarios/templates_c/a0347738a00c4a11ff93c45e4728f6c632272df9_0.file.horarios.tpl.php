<?php
/* Smarty version 3.1.36, created on 2022-07-07 19:15:01
  from 'C:\wamp64\www\sistema_herreria\privada\horarios\templates\horarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62c730b548d596_64672186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0347738a00c4a11ff93c45e4728f6c632272df9' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\horarios\\templates\\horarios.tpl',
      1 => 1654873238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c730b548d596_64672186 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td width="33%">
			<table border="0">
				<tr>
		
				</tr>
			</table> 		
			</td>
			<td align="center" width="33%">
				<h1>HORARIOS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formuNuevo" method="post" action="horario_nuevo.php">
					<a href="javascript:document.formuNuevo.submit()">
						NUEVO
					</a>
				</form>
			</td>
		</tr>	
	</table>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>NOMBRES</th><th>HORA ENTRADA</th><th>HORA SALIDA</th>
				<th> <img src="../../imagenes/modificar.jpg" width="9%"></th>
				<th><img src="../../imagenes/borrar.jpg" width="9%"></th>
			</tr>

			<?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horarios']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>

			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Nombres'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Hora_Entrada'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Hora_Salida'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Horario'];?>
" method="post" action="horario_modificar.php">
						<input type="hidden" name="id_Horario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Horario'];?>
">
						<input type="hidden" name="id_Personal" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Personal'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Horario'];?>
.submit();" title="modificar usuario">
							MODIFICAR
						</a>						
					</form>					
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Horario'];?>
" method="post" action="compra_eliminar.php">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Horario'];?>
.submit();" title="eliminar horarios"
						onclick='javascript:return(confirm("desea realmente eliminar las horarios:::<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Horario'];?>
..?"));'>ELIMINAR				
						</a>						
					</form>				
				</td>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</table>
	</center>
</body>
</html><?php }
}

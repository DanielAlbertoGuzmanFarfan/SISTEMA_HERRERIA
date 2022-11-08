<?php
/* Smarty version 3.1.36, created on 2022-07-02 20:05:37
  from 'C:\wamp\www\sistema_herreria\privada\compras\templates\compras.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62c0dd51182ab5_26716421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab27ce85851373289df21b0761c3d4a4cbb079ac' => 
    array (
      0 => 'C:\\wamp\\www\\sistema_herreria\\privada\\compras\\templates\\compras.tpl',
      1 => 1656035716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c0dd51182ab5_26716421 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h1>COMPRAS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formuNuevo" method="post" action="compra_nuevo.php">
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
				<th>NRO</th><th>NOMBRES</th><th>MONTO COMPRA</th><th>FECHA COMPRA</th>
				<th> <img src="../../imagenes/modificar.jpg" width="9%"></th>
				<th><img src="../../imagenes/borrar.jpg" width="9%"></th>
			</tr>

			<?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compras']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>

			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Monto_Compra'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_Compra'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Compra'];?>
" method="post" action="compra_modificar.php">
						<input type="hidden" name="id_Compra" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Compra'];?>
">
						<input type="hidden" name="id_Proveedor" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Proveedor'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Compra'];?>
.submit();" title="modificar usuario">
							MODIFICAR
						</a>						
					</form>					
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Compra'];?>
" method="post" action="compra_eliminar.php">
						<input type="hidden" name="id_Compra" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Compra'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Compra'];?>
.submit();" title="eliminar compras"

						onclick='javascript:return(confirm("desea realmente eliminar la compra con el monto:::<?php echo $_smarty_tpl->tpl_vars['r']->value['Monto_Compra'];?>
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

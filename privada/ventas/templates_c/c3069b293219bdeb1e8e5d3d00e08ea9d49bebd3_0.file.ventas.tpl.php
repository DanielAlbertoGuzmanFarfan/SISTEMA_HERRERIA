<?php
/* Smarty version 3.1.36, created on 2022-07-07 19:52:55
  from 'C:\wamp64\www\sistema_herreria\privada\ventas\templates\ventas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62c73997e55602_48068027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3069b293219bdeb1e8e5d3d00e08ea9d49bebd3' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\ventas\\templates\\ventas.tpl',
      1 => 1657147980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c73997e55602_48068027 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h1>VENTAS</h1>
			</td>
			<td align="right" width="33%">
				<form name="formuNuevo" method="post" action="venta_nuevo.php">
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
				<th>NRO</th><th>NOMBRES</th><th>MONTO TOTAL</th><th>FECHA VENTA</th>
				<th> <img src="../../imagenes/modificar.jpg" width="9%"></th>
				<th><img src="../../imagenes/borrar.jpg" width="9%"></th>
			</tr>

			<?php $_smarty_tpl->_assignInScope('b', '1');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ventas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>

			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Apellidos'];?>
  <?php echo $_smarty_tpl->tpl_vars['r']->value['Nombres'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Monto_Total'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_Venta'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Venta'];?>
" method="post" action="venta_modificar.php">
						<input type="hidden" name="id_Venta" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Venta'];?>
">
						<input type="hidden" name="id_Cliente" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Cliente'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Venta'];?>
.submit();" title="modificar usuario">
							MODIFICAR
						</a>						
					</form>					
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Venta'];?>
" method="post" action="venta_eliminar.php">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Venta'];?>
.submit();" title="eliminar ventas"
						onclick='javascript:return(confirm("desea realmente eliminar las ventas:::<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Venta'];?>
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

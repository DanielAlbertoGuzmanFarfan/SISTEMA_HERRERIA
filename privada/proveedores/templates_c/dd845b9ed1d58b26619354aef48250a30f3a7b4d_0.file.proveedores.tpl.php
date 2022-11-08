<?php
/* Smarty version 3.1.36, created on 2022-09-03 21:54:59
  from 'C:\wamp\www\sistema_herreria\privada\proveedores\templates\proveedores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_631405731046a7_85351240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd845b9ed1d58b26619354aef48250a30f3a7b4d' => 
    array (
      0 => 'C:\\wamp\\www\\sistema_herreria\\privada\\proveedores\\templates\\proveedores.tpl',
      1 => 1660266242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631405731046a7_85351240 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
	
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/buscar_proveedores.js"><?php echo '</script'; ?>
>

</head>
<body>
  <div class="titulo_listado">
	<h1>
		PROVEEDORES
	</h1>
  </div>
  <div class="titulo_nuevo">
  	<form name="FormNuevo" method="post" action="proveedor_nuevo.php">
  		<a href="javascript:document.FormNuevo.submit();">
  			NUEVO
  		</a>
  	</form>
  </div>

  <center>
  	<form action="#" method="post" name="formu">
  		<table border="1" class="listado">
  			<tr>
  				<th>
  					<b>Nombre</b><br />
  					<input type="text" name="nombre" value="" size="10" onkeyup="buscar_proveedores()">
  				</th>
  				<th>
  					<b>Telefono</b><br />
  					<input type="text" name="telefono" value="" size="10" onkeyup="buscar_proveedores()">
  				</th>
  			</tr>
  		</table>
  	</form>
  </center>

  <center>
  	<div id="proveedores1">
  	<table class="listado">
  		<tr>
  			<th>NRO</th><th>NOMBRE</th><th>DIRECCION</th><th>CORREO</th><th>TELEFONO</th>
  			<th><img src="../../imagenes/modificar.jpg" width="9%"></th><th><img src="../../imagenes/borrar.jpg" width="9%"></th>
  		</tr>
  		<?php $_smarty_tpl->_assignInScope('b', "0");?>
  		<?php $_smarty_tpl->_assignInScope('total', ((string)($_smarty_tpl->tpl_vars['pagina']->value-1)));?>
  		<?php $_smarty_tpl->_assignInScope('a', ((string)($_smarty_tpl->tpl_vars['numreg']->value*$_smarty_tpl->tpl_vars['total']->value)));?>
  		<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1+$_smarty_tpl->tpl_vars['a']->value)));?>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proveedores']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
  		<tr>
  			<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
  			
  			<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Nombre'];?>
</td>
  			<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['Direccion'];?>
</td>
  			<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['Correo'];?>
</td>
  			<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['Telefono'];?>
</td>
  			<td align="center">
  				<form name="FormModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Proveedor'];?>
" method="post" action="proveedor_modificar.php">
  					<input type="hidden" name="id_Proveedor" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Proveedor'];?>
">
  					<a href="javascript:document.FormModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Proveedor'];?>
.submit();" title="modificar proveedor Sistema">
  						MODIFICAR
  					</a>
  				</form>
  			</td>
  			<td align="center">
  				<form name="FormElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Proveedor'];?>
" method="post" action="proveedor_eliminar.php">
  					<input type="hidden" name="id_Proveedor" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Proveedor'];?>
">
  					<a href="javascript:document.FormElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Proveedor'];?>
.submit();" title="Eliminar proveedor Sistema" onclick="'proveedor_eliminar.php'">
  						ELIMINAR
  					</a>
  				</form>
  			</td>
  			<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
  			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  		</tr>
  	</table>

  	<table>
  		<tr align="center">
  			<td>
  				<?php if (!empty($_smarty_tpl->tpl_vars['urlback']->value)) {?>
  				<a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlback']->value;?>
'" style="font-family: Verdana;font-size: 9px;cursor: pointer";>&laquo;
  				Anterior</a>
  				<?php }?>
  				<?php if (!empty($_smarty_tpl->tpl_vars['paginas']->value)) {?>
  				  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginas']->value, 'pag');
$_smarty_tpl->tpl_vars['pag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pag']->value) {
$_smarty_tpl->tpl_vars['pag']->do_else = false;
?>
  				    <?php if ($_smarty_tpl->tpl_vars['pag']->value['npag'] == $_smarty_tpl->tpl_vars['pagina']->value) {?>
  				      <?php if ($_smarty_tpl->tpl_vars['pagina']->value != '1') {?>|<?php }?> <b style="color:#FB992F;font-size:  12px;"><?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</b>
  				    <?php } else { ?>
  				     | <a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['pag']->value['pagV'];?>
'" style="cursor: pointer;"><?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</a>
  				    <?php }?>
  				    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  				    <?php }?>
  				    <?php if ($_smarty_tpl->tpl_vars['numpaginas']->value > $_smarty_tpl->tpl_vars['numbotones']->value && !empty($_smarty_tpl->tpl_vars['urlnext']->value) && $_smarty_tpl->tpl_vars['pagina']->value < $_smarty_tpl->tpl_vars['numpaginas']->value) {?>
  				    | <a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlnext']->value;?>
'" style="font-family: Verdana;font-size: 9px;cursor: pointer">
  				    Siguiente&raquo;</a>
  				    <?php }?>	
  			</td>
  		</tr>
  	</table>
  </div>
  </center>	
  </body>
</html><?php }
}

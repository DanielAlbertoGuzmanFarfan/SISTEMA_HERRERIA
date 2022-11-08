<?php
/* Smarty version 3.1.36, created on 2022-07-02 20:04:25
  from 'C:\wamp\www\sistema_herreria\privada\trabajos\templates\trabajos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62c0dd09166f05_80786879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d01a8258da8757f03ade328c35a4f765e2add60' => 
    array (
      0 => 'C:\\wamp\\www\\sistema_herreria\\privada\\trabajos\\templates\\trabajos.tpl',
      1 => 1656360060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c0dd09166f05_80786879 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
	
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>

</head>
<body>
  <div class="titulo_listado">
	<h1>
		TRABAJOS
	</h1>
  </div>
  <div class="titulo_nuevo">
  	<form name="FormNuevo" method="post" action="trabajo_nuevo.php">
  		<a href="javascript:document.FormNuevo.submit();">
  			NUEVO
  		</a>
  	</form>
  </div>
  <center>
  	<table class="listado">
  		<tr>
  			<th>NRO</th><th>TRABAJO</th><th>FOTO</th><th>PRECIO</th><th>CANTIDAD</th><th>DESCRIPCION</th>
  			<th><img src="../../imagenes/modificar.jpg" width="9%"></th><th><img src="../../imagenes/borrar.jpg" width="9%"></th>
  		</tr>
  		<?php $_smarty_tpl->_assignInScope('b', "0");?>
  		<?php $_smarty_tpl->_assignInScope('total', ((string)($_smarty_tpl->tpl_vars['pagina']->value-1)));?>
  		<?php $_smarty_tpl->_assignInScope('a', ((string)($_smarty_tpl->tpl_vars['numreg']->value*$_smarty_tpl->tpl_vars['total']->value)));?>
  		<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1+$_smarty_tpl->tpl_vars['a']->value)));?>
  		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trabajos']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
  		<tr>
  			<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
  			
  			<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Trabajo'];?>
</td>
  			<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['Foto'];?>
</td>
  			<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['precio'];?>
</td>
  			<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Cantidad'];?>
</td>
  			<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Descripcion'];?>
</td>
  			<td align="center">
  				<form name="FormModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Trabajo'];?>
" method="post" action="trabajo_modificar.php">
  					<input type="hidden" name="id_Trabajo" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Trabajo'];?>
">
  					<a href="javascript:document.FormModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Trabajo'];?>
.submit();" title="modificar trabajo Sistema">
  						Modificar>>
  					</a>
  				</form>
  			</td>
  			<td align="center">
  				<form name="FormElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Trabajo'];?>
" method="post" action="trabajo_eliminar.php">
  					<input type="hidden" name="id_Trabajo" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Trabajo'];?>
">
  					<a href="javascript:document.FormElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_Trabajo'];?>
.submit();" title="Eliminar trabajo Sistema" onclick="'trabajo_eliminar.php'">
  						Eliminar>>
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
  </center>	
  </body>
</html><?php }
}

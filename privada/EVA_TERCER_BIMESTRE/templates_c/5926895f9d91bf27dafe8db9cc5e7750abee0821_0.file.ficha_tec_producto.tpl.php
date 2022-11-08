<?php
/* Smarty version 3.1.36, created on 2022-10-04 20:11:05
  from 'C:\wamp64\www\sistema_herreria\privada\EVA_TERCER_BIMESTRE\templates\ficha_tec_producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_633c935978d145_12277922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5926895f9d91bf27dafe8db9cc5e7750abee0821' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\EVA_TERCER_BIMESTRE\\templates\\ficha_tec_producto.tpl',
      1 => 1664914214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633c935978d145_12277922 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" type="text/css" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		function buscar(){
			
			var d1,d2, contenedor, ajax, url, param;
			contenedor = document.getElementById('proveedor1');
			
			d1 = document.formu.nombre.value;
			d2 = document.formu.descripcion.value;
			d3 = document.formu.modelo.value;

			ajax = nuevoAjax();
			url = "ajax_buscar_proveedor.php"
			param = "nombre="+d1+"&descripcion="+d2+"&modelo="+d3;
			ajax.open("POST",url,true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4){
					contenedor.innerHTML = ajax.responseText;
					contenedor2.innerHTML = "";
					contenedor3.innerHTML = "";
				}
			}
			ajax.send(param);
		}
		function buscar_proveedor(id_proveedor1){
			var d1, ventanaCalendario;
			d1= id_proveedor1;
			//alert(d1);

			ventanaCalendario = window.open("ficha_tec_producto1.php?id_proveedor1=" + d1  , "calendario", "width=600, heigth=550,left=100,top=100, scrollbars=yes, menubars=no, statusbas=NO, status=NO, resizable=YES, location=NO")
		}
	<?php echo '</script'; ?>
>
</head>
<body>
	<div class="titulo_listado">
	<h1>FICHA TECNICA PRODUCTO</h1>
</div>
	<center>
	<form action="#" method="post" name="formu">
		<table border="1" class="listado">
			<tr>
			<th>
			<select name="proveedores1">
		  	<option value="">---seleccione---</option>
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proveedores1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
		  <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_proveedor1'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
		  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		  </select>
			</th>
			<th>
			<b>Descripcion</b><br>
				<input type="text" name="descripcion" value="" size="10" onkeyup="buscar()">
			</th>
			<th>
			<b>Modelo</b><br>
				<input type="text" name="modelo" value="" size="10" onkeyup="buscar()">
			</th>
			</tr>
			</table>
			</form>
		    </center>

	<center>
		<div id="proveedor1">
		</div>
</body>
</html>
<?php }
}

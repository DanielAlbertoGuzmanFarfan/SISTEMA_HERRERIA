<?php
/* Smarty version 3.1.36, created on 2022-09-27 19:39:45
  from 'C:\wamp64\www\sistema_herreria\privada\EVA_TERCER_BIMESTRE\templates\rpt_producto1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_633351810ea0e0_64955841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb915ceb7d7b4b0ac707b75a50ff0c921514be45' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\EVA_TERCER_BIMESTRE\\templates\\rpt_producto1.tpl',
      1 => 1664307570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633351810ea0e0_64955841 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<?php echo '<script'; ?>
 type="text/javascript">
              var ventanaCalendario = false
              function imprimir() {
                   if(confirm(' Desea Imprimir ?')){
               window.print();
            } 
 }
 
<?php echo '</script'; ?>
>
</head>
<body style='cursor:pointer;cursor:hand' onclick='imprimir();'>

<table width="100%" border="0">
 <tr>
        <td><img src="../../imagenes/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="70%" alt=""></td>
        <td aling="center"  width="80%"  ><h1>PRODUCTOS PROVEEDORES</h1> </td>
 </tr>
</table>
 <br>
 <center>
  <table border="1" cellpadding="0">
   <tr>
   <th>NRO</th><th>NOMBRE</th><th>DESCRIPCION</th><th>MODELO</th><th>MARCA</th><th>INDUSTRIA</th>
   </tr>
   <?php $_smarty_tpl->_assignInScope('b', '1');?>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos_proveedores1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
   <tr>
    <td aling="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
    
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['descripcion'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['modelo'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['marca'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['industria_origen'];?>
</td>
    <?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </tr>
  </table>
  <br>
  <br>
  <b>Fecha:</b><?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>

 </center>
</body>
</html><?php }
}

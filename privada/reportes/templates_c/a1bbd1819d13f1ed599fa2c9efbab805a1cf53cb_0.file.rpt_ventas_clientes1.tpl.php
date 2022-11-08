<?php
/* Smarty version 3.1.36, created on 2022-09-20 18:08:59
  from 'C:\wamp64\www\sistema_herreria\privada\reportes\templates\rpt_ventas_clientes1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_632a01bbda6a11_42079342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1bbd1819d13f1ed599fa2c9efbab805a1cf53cb' => 
    array (
      0 => 'C:\\wamp64\\www\\sistema_herreria\\privada\\reportes\\templates\\rpt_ventas_clientes1.tpl',
      1 => 1661917499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_632a01bbda6a11_42079342 (Smarty_Internal_Template $_smarty_tpl) {
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
        <td aling="center"  width="80%"  ><h1>VENTAS CLIENTES</h1> </td>
 </tr>
</table>
 <br>
 <center>
  <table border="1" cellpadding="0">
   <tr>
   <th>NRO</th><th>APELLIDOS</th><th>NOMBRES</th><th>MONTO VENTA</th>
   </tr>
   <?php $_smarty_tpl->_assignInScope('b', '1');?>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ventas_clientes1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
   <tr>
    <td aling="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
    
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['Apellidos'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['Nombres'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['Monto_Total'];?>
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
